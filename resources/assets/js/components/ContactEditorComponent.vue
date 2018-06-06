<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <iframe src="/contact" title="iframe example 1" style="width: 100%; height: 1000px">
                    <p>Your browser does not support iframes.</p>
                </iframe>
            </div>
            <div class="col-md-4">
                <div class="card card-default">
                    <div class="card-header">Contact Page</div>

                    <div class="card-body">
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group label="Contact Header"
                                            label-for="contactHeader"
                                            description="">
                                <b-form-input id="contactHeader"
                                            type="text"
                                            required
                                            placeholder="Contact Header"
                                            v-model="contactHeader">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Email Helper Text"
                                            label-for="emailHelper"
                                            description="">
                                <b-form-input id="emailHelper"
                                            type="text"
                                            required
                                            placeholder="Email Helper Text"
                                            v-model="emailHelper">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Header"
                                            label-for="sectionHeader"
                                            description="">
                                <b-form-input id="sectionHeader"
                                            type="text"
                                            required
                                            placeholder="Section Header"
                                            v-model="sectionHeader">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Description"
                                            label-for="sectionDescription"
                                            description="">
                                <b-form-input id="sectionDescription"
                                            type="text"
                                            required
                                            placeholder="Section Description"
                                            v-model="sectionDescription">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Video YouTube URL"
                                            label-for="sectionVideoYouTubeURL"
                                            description="">
                                <b-form-input id="sectionVideoYouTubeURL"
                                            type="text"
                                            required
                                            placeholder="Section Video YouTube URL"
                                            v-model="sectionVideoYouTubeURL">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Paragraph #1"
                                            label-for="sectionParagraph1"
                                            description="">
                                <b-form-input id="sectionParagraph1"
                                            type="text"
                                            required
                                            placeholder="Section Paragraph #1"
                                            v-model="sectionParagraph1">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Paragraph #2"
                                            label-for="sectionParagraph2"
                                            description="">
                                <b-form-input id="sectionParagraph2"
                                            type="text"
                                            required
                                            placeholder="Section Paragraph #2"
                                            v-model="sectionParagraph2">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Contact Card Description"
                                            label-for="contactCardDescription"
                                            description="">
                                <b-form-input id="contactCardDescription"
                                            type="text"
                                            required
                                            placeholder="Contact Card Description"
                                            v-model="contactCardDescription">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Phone Number Field"
                                            label-for="phoneNumberField"
                                            description="">
                                <b-form-input id="phoneNumberField"
                                            type="text"
                                            required
                                            placeholder="Phone Number Field"
                                            v-model="phoneNumberField">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Email Address Field"
                                            label-for="emailAddressField"
                                            description="">
                                <b-form-input id="emailAddressField"
                                            type="text"
                                            required
                                            placeholder="Email Address Field"
                                            v-model="emailAddressField">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Address Field"
                                            label-for="addressField"
                                            description="">
                                <b-form-input id="addressField"
                                            type="text"
                                            required
                                            placeholder="Address Field"
                                            v-model="addressField">
                                </b-form-input>
                            </b-form-group>
                            <b-button type="submit" variant="primary">Save</b-button>
                        </b-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            for (let prop in window.data.data) {
                Vue.set(this.$data, prop, window.data.data[prop]);
            }
        },
        data() {
            return {
                contactHeader: '',
                emailHelper: '',
                sectionHeader: '',
                sectionDescription: '',
                sectionVideoYouTubeURL: '',
                sectionParagraph1: '',
                sectionParagraph2: '',
                contactCardDescription: '',
                phoneNumberField: '',
                emailAddressField: '',
                addressField: ''
            }
        },
        methods: {
            onSubmit() {
                let form = new FormData();
                let title = 'contact';
                let data = {};

                Object.assign(data, this.$data);

                form.append('title', title);
                form.append('data', JSON.stringify(data));

                axios.post('/admin/save', form).then(response => {
                    window.location.reload(true);
                }).catch(e => {
                    alert('There was an error. Please contact support.');
                });
            }
        }
    }
</script>
