<template>
  <div>
    <h5 class="card-title">
      Step
      <b>2</b>/
      <span class="small">3</span> Project Instructions
    </h5>
    <hr />

    <div class="form-group">
      <label>Topic <span class="required">*</span></label>
      <input type="text" class="form-control" v-model="form.title" />
      <div class="invalid-feedback d-block" v-if="errors.title">{{ errors.title[0] }}</div>
    </div>
    <div class="form-group">
      <label>Special Instructions <span class="required">*</span></label>
      <textarea
        class="form-control"
        v-model="form.instruction"
        rows="4"
      max-rows="6"
        placeholder="A brief outline
Desired structure
Reference links
Any other comments
"
      ></textarea>
      <div class="invalid-feedback d-block" v-if="errors.instruction">{{ errors.instruction[0] }}</div>
    </div>
    <!--Upload files -->
    <VueFileAgent
      ref="vueFileAgent"
      :theme="'list'"
      :multiple="true"
      :deletable="true"
      :meta="true"
      :accept="'.xlsx,.xls, .doc, .docx,.ppt, .pptx,.txt,.pdf, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*'"
      :maxSize="'10MB'"
      :maxFiles="2"
      :helpText="'Attach Files'"
      :errorText="{
                     type: 'Invalid file type. Only images, .pdf,.doc,.ppt,.txt files are allowed',
                     size: 'Files should not exceed 10MB in size',
                     }"
      @select="filesSelected($event)"
      @delete="fileDeleted($event)"
      v-model="form.files_data"
    ></VueFileAgent>    
    <!--  <button :disabled="!filesDataForUpload.length" @click="uploadFiles($event)">
                     Upload {{ filesDataForUpload.length }} files
    </button>-->
    <br />
    <a href="#" v-on:click.prevent="changeTab(1)">Previous</a>
    <br />
    <br />
    <a href="#" class="btn btn-success btn-lg btn-block" v-on:click.prevent="submit()">
      <i class="fas fa-shopping-cart"></i> Checkout
    </a>
  </div>
</template>

<script>
export default {
  props: {
    upload_attachment_url: {
      type: String,
      default() {
        return null;
      }
    },
    errors: {
      type: Object,
      default() {
        return null;
      }
    }
  },
  computed: {
    classObject: function() {
      return {
        "text-danger": this.error && this.error.type === "fatal"
      };
    }
  },
  data() {
    return {
      form: {
        title: "",
        instruction: "",
        files_data: []
      },
      uploadUrl: this.upload_attachment_url,
      uploadHeaders: {
        "X-Test-Header": "vue-file-agent",
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
          .content
      },
      filesDataForUpload: []
    };
  },

  methods: {
    changeTab(tabNumber) {
      this.$emit("changeTab", tabNumber);
    },
    submit() {
      this.$emit("submitRequest", this.form);
    },
    uploadFiles: function() {
      // Using the default uploader. You may use another uploader instead.
      this.$refs.vueFileAgent.upload(
        this.uploadUrl,
        this.uploadHeaders,
        this.filesDataForUpload
      );
      this.filesDataForUpload = [];
    },
    deleteUploadedFile: function(fileData) {
      // Using the default uploader. You may use another uploader instead.
      this.$refs.vueFileAgent.deleteUpload(
        this.uploadUrl,
        this.uploadHeaders,
        fileData
      );
    },
    filesSelected: function(filesDataNewlySelected) {
      var validFilesData = filesDataNewlySelected.filter(
        fileData => !fileData.error
      );
      this.filesDataForUpload = this.filesDataForUpload.concat(validFilesData);
      this.uploadFiles();
    },
    fileDeleted: function(fileData) {
      var i = this.filesDataForUpload.indexOf(fileData);
      if (i !== -1) {
        this.filesDataForUpload.splice(i, 1);
      } else {
        this.deleteUploadedFile(fileData);
      }
    }
  }
};
</script>
