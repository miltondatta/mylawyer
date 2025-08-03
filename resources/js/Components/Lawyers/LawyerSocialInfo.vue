<template>
  <div class="tab-pane" :class="{ active: active }" id="socialInfo" role="tabpanel" aria-labelledby="social-info-tab"
    tabindex="0">
    <form @submit.prevent="submit" class="profileForm">
      <div class="row">
        <div class="col-md-12">
          <validation-errors></validation-errors>
          <div class="col-12">
            <div class="row">
              <div v-for="(setting, i) in form.settings" :key="i" class="col-md-6">
                <div  class="form-group mb-3">
                  <label :for="setting.display_name">{{setting.display_name}}</label>
                  <input v-model="setting.value" placeholder="Please Enter" class="w-100 form-control px-3"
                    type="text" />
                </div>

              </div>

            </div>
            <div class="row align-items-center">
              <div class="col-md-2">
                <button type="submit" :disabled="form.processing" class="submit btn btn-primary">
                  <SpinnerLoader v-if="form.processing" />
                  {{__('save')}}
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </form>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import SpinnerLoader from "@/Components/Shared/SpinnerLoader.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import axios from "axios";

export default defineComponent({
  components: {
    Head,
    SpinnerLoader,
    ValidationErrors,
    Link,
  },
  props: ['active'],
  data() {
    return {
      form: this.$inertia.form({
        settings: [{
          'name': 'facebook_url',
          'display_name': "Facebook Url",
          'value': this.$page.props.lawyer.lawyer_settings['facebook_url'] ?? "",
        },
        {
          'name': 'twitter_url',
          'display_name': "Twitter Url",
          'value': this.$page.props.lawyer.lawyer_settings['twitter_url'] ?? "",
        },
        {
          'name': 'youtube_url',
          'display_name': "Youtube Url",
          'value': this.$page.props.lawyer.lawyer_settings['youtube_url'] ?? "",
        },
        {
          'name': 'tiktok_url',
          'display_name': "TikTok Url",
          'value': this.$page.props.lawyer.lawyer_settings['tiktok_url'] ?? "",
        },
        {
          'name': 'linkedin_url',
          'display_name': "LinkedIn Url",
          'value': this.$page.props.lawyer.lawyer_settings['linkedin_url'] ?? "",
        },
        {
          'name': 'whatsapp_url',
          'display_name': "Whatsapp Url",
          'value': this.$page.props.lawyer.lawyer_settings['whatsapp_url'] ?? "",
        },
        {
          'name': 'snapchat_url',
          'display_name': "Snapchat Url",
          'value': this.$page.props.lawyer.lawyer_settings['snapchat_url'] ?? "",
        },
        {
          'name': 'instagram_url',
          'display_name': "Instagram Url",
          'value': this.$page.props.lawyer.lawyer_settings['instagram_url'] ?? "",
        },
        {
          'name': 'pinterest_url',
          'display_name': "PinTerest Url",
          'value': this.$page.props.lawyer.lawyer_settings['pinterest_url'] ?? "",
        }
        ]
      }),
    };
  },
  methods: {
    submit() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("lawyers.update_settings"), {
            onSuccess: () => {
                         this.goToNextTab()
                    }
        });
    },
    goToNextTab(){
            this.$inertia.visit(route('account'),{data:{active_tab:'broadcasts'}})
        }
  },
});
</script>
