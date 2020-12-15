<?php

namespace App\Services;

use App\Order;
use App\OrderAdditionalService;
use App\Attachment;
use App\NumberGenerator;
use App\Events\NewOrderEvent;

class OrderService
{
    function create(array $data)
    {

        $data['number'] = NumberGenerator::gen('App\Order');

        if (!isset($data['order_status_id']) && empty($data['order_status_id'])) {
            $data['order_status_id'] = ORDER_STATUS_NEW;
        }

        $data['dead_line'] = date("Y-m-d", strtotime($data['dead_line']));

        $order = Order::create($data);
        $this->record_added_services($order, $data);
        $this->record_attachments($order, $data);

        // Deduct balance from customer's wallet
        $order->customer->wallet()->pay($order->total, $order);

        // Dispatching Event
        event(new NewOrderEvent($order));

        return $order;
    }

    private function record_added_services(Order $order, $data)
    {
        if (isset($data['added_services']) && is_array($data['added_services']) && count($data['added_services']) > 0) {
            foreach ($data['added_services'] as $row) {
                $service = new OrderAdditionalService();
                $service->service_id = $row['id'];
                $service->type = $row['type'];
                $service->name = $row['name'];
                $service->rate = $row['rate'];
                $order->added_services()->save($service);
            }
        }
    }

    private function record_attachments(Order $order, $data)
    {
        if (isset($data['files_data']) && is_array($data['files_data']) && count($data['files_data']) > 0) {
            foreach ($data['files_data'] as $row) {

                if (isset($row['upload']['data']['name'])) {
                    $attachment = new Attachment();
                    $attachment->name = $row['upload']['data']['name'];
                    $attachment->display_name = $row['upload']['data']['display_name'];
                    $attachment->user_id = $data['customer_id'];

                    $order->attachments()->save($attachment);
                }
            }
        }
    }
}
