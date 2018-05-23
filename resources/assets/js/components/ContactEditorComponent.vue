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
                        <b-form @submit="onSubmit">
                            <b-form-group label="Contact Header"
                                            label-for="contactHeader"
                                            description="">
                                <b-form-input id="contactHeader"
                                            type="text"
                                            required
                                            placeholder="Contact Header">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Email Helper Text"
                                            label-for="emailHelper"
                                            description="">
                                <b-form-input id="emailHelper"
                                            type="text"
                                            required
                                            placeholder="Email Helper Text">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Header"
                                            label-for="sectionHeader"
                                            description="">
                                <b-form-input id="sectionHeader"
                                            type="text"
                                            required
                                            placeholder="Section Header">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Description"
                                            label-for="sectionDescription"
                                            description="">
                                <b-form-input id="sectionDescription"
                                            type="text"
                                            required
                                            placeholder="Section Description">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Video YouTube URL"
                                            label-for="sectionVideoYouTubeURL"
                                            description="">
                                <b-form-input id="sectionVideoYouTubeURL"
                                            type="text"
                                            required
                                            placeholder="Section Video YouTube URL">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Section Paragraph"
                                            label-for="sectionParagraph"
                                            description="">
                                <b-form-input id="sectionParagraph"
                                            type="text"
                                            required
                                            placeholder="Section Paragraph">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Contact Card Description"
                                            label-for="contactCardDescription"
                                            description="">
                                <b-form-input id="contactCardDescription"
                                            type="text"
                                            required
                                            placeholder="Contact Card Description">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Phone Number Field"
                                            label-for="phoneNumberField"
                                            description="">
                                <b-form-input id="phoneNumberField"
                                            type="text"
                                            required
                                            placeholder="Phone Number Field">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Email Address Field"
                                            label-for="emailAddressField"
                                            description="">
                                <b-form-input id="emailAddressField"
                                            type="text"
                                            required
                                            placeholder="Email Address Field">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Address Field"
                                            label-for="addressField"
                                            description="">
                                <b-form-input id="addressField"
                                            type="text"
                                            required
                                            placeholder="Address Field">
                                </b-form-input>
                            </b-form-group>
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
            console.log('Component mounted.')
        },
        methods: {
            onSubmit() {
                console.log('test');
            }
        }
    }
</script>
