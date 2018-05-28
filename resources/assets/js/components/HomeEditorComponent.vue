<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <iframe src="/" title="iframe example 1" style="width: 100%; height: 1000px">
                    <p>Your browser does not support iframes.</p>
                </iframe>
            </div>
            <div class="col-md-4">
                <div class="card card-default">
                    <div class="card-header">Home Page</div>

                    <div class="card-body">
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group label="Site Description"
                                            label-for="siteDescription"
                                            description="">
                                <b-form-input id="siteDescription"
                                            type="text"
                                            required
                                            placeholder="Site Description"
                                            v-model="siteDescription">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #1 Title"
                                            label-for="highlight1title"
                                            description="">
                                <b-form-input id="highlight1title"
                                            type="text"
                                            required
                                            placeholder="Highlight #1 Title"
                                            v-model="highlight1title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #1 Description"
                                            label-for="highlight1description"
                                            description="">
                                <b-form-input id="highlight1"
                                            type="text"
                                            required
                                            placeholder="Highlight #1 Description"
                                            v-model="highlight1description">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #1 YouTube URL"
                                            label-for="highlight1youtube"
                                            description="">
                                <b-form-input id="highlight1youtube"
                                            type="text"
                                            required
                                            placeholder="Highlight #1 YouTube URL"
                                            v-model="highlight1youtube">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #1 Learn More URL"
                                            label-for="highlight1learnMore"
                                            description="">
                                <b-form-input id="highlight1learnMore"
                                            type="text"
                                            required
                                            placeholder="Highlight #1 Learn More URL"
                                            v-model="highlight1learnMore">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #2 Title"
                                            label-for="highlight2title"
                                            description="">
                                <b-form-input id="highlight2title"
                                            type="text"
                                            required
                                            placeholder="Highlight #2 Title"
                                            v-model="highlight2title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #2 Description"
                                            label-for="highlight2description"
                                            description="">
                                <b-form-input id="highlight2"
                                            type="text"
                                            required
                                            placeholder="Highlight #2 Description"
                                            v-model="highlight2description">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #2 YouTube URL"
                                            label-for="highlight2youtube"
                                            description="">
                                <b-form-input id="highlight2youtube"
                                            type="text"
                                            required
                                            placeholder="Highlight #2 YouTube URL"
                                            v-model="highlight2youtube">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #2 Learn More URL"
                                            label-for="highlight2learnMore"
                                            description="">
                                <b-form-input id="highlight2learnMore"
                                            type="text"
                                            required
                                            placeholder="Highlight #2 Learn More URL"
                                            v-model="highlight2learnMore">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #3 Title"
                                            label-for="highlight3title"
                                            description="">
                                <b-form-input id="highlight3title"
                                            type="text"
                                            required
                                            placeholder="Highlight #3 Title"
                                            v-model="highlight3title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #3 Description"
                                            label-for="highlight3description"
                                            description="">
                                <b-form-input id="highlight3"
                                            type="text"
                                            required
                                            placeholder="Highlight #3 Description"
                                            v-model="highlight3description">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #3 YouTube URL"
                                            label-for="highlight3youtube"
                                            description="">
                                <b-form-input id="highlight3youtube"
                                            type="text"
                                            required
                                            placeholder="Highlight #3 YouTube URL"
                                            v-model="highlight3youtube">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Highlight #3 Learn More URL"
                                            label-for="highlight3learnMore"
                                            description="">
                                <b-form-input id="highlight3learnMore"
                                            type="text"
                                            required
                                            placeholder="Highlight #3 Learn More URL"
                                            v-model="highlight3learnMore">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #1 Title"
                                            label-for="productFeature1title"
                                            description="">
                                <b-form-input id="productFeature1title"
                                            type="text"
                                            required
                                            placeholder="Product Feature #1 Title"
                                            v-model="productFeature1title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #1 Description"
                                            label-for="productFeature1description"
                                            description="">
                                <b-form-input id="productFeature1description"
                                            type="text"
                                            required
                                            placeholder="Product Feature #1 Description"
                                            v-model="productFeature1description">
                                </b-form-input>
                            </b-form-group>
                            <div class="form-group image-upload">
                                <img :src="productFeatureImage1Src" />
                                <label for="imageUpload1">Upload Image</label>
                                <input @change.prevent="setImageForUpload('productFeatureImage1', 'productFeatureImage1Src', $event)" name="imageUpload1" type="file" class="form-control">
                            </div>
                            <b-form-group label="Product Feature #1 Store Page URL"
                                            label-for="productFeature1storePageUrl"
                                            description="">
                                <b-form-input id="productFeature1storePageUrl"
                                            type="text"
                                            required
                                            placeholder="Product Feature #1 Store Page URL"
                                            v-model="productFeature1storePageUrl">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #2 Title"
                                            label-for="productFeature2title"
                                            description="">
                                <b-form-input id="productFeature2title"
                                            type="text"
                                            required
                                            placeholder="Product Feature #2 Title"
                                            v-model="productFeature2title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #2 Description"
                                            label-for="productFeature1description"
                                            description="">
                                <b-form-input id="productFeature2description"
                                            type="text"
                                            required
                                            placeholder="Product Feature #2 Description"
                                            v-model="productFeature2description">
                                </b-form-input>
                            </b-form-group>
                            <div class="form-group image-upload">
                                <img :src="productFeatureImage2Src" />
                                <label for="imageUpload2">Upload Image</label>
                                <input @change.prevent="setImageForUpload('productFeatureImage2', 'productFeatureImage2Src', $event)" name="imageUpload2" type="file" class="form-control">
                            </div>
                            <b-form-group label="Product Feature #2 Store Page URL"
                                            label-for="productFeature1storePageUrl"
                                            description="">
                                <b-form-input id="productFeature2storePageUrl"
                                            type="text"
                                            required
                                            placeholder="Product Feature #2 Store Page URL"
                                            v-model="productFeature2storePageUrl">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #3 Title"
                                            label-for="productFeature3title"
                                            description="">
                                <b-form-input id="productFeature3title"
                                            type="text"
                                            required
                                            placeholder="Product Feature #3 Title"
                                            v-model="productFeature3title">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Product Feature #3 Description"
                                            label-for="productFeature3description"
                                            description="">
                                <b-form-input id="productFeature3description"
                                            type="text"
                                            required
                                            placeholder="Product Feature #3 Description"
                                            v-model="productFeature3description">
                                </b-form-input>
                            </b-form-group>
                            <div class="form-group image-upload">
                                <img :src="productFeatureImage3Src" />
                                <label for="imageUpload3">Upload Image</label>
                                <input @change.prevent="setImageForUpload('productFeatureImage3', 'productFeatureImage3Src', $event)" name="imageUpload3" type="file" class="form-control">
                            </div>
                            <b-form-group label="Product Feature #3 Store Page URL"
                                            label-for="productFeature3storePageUrl"
                                            description="">
                                <b-form-input id="productFeature3storePageUrl"
                                            type="text"
                                            required
                                            placeholder="Product Feature #3 Store Page URL"
                                            v-model="productFeature3storePageUrl">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Learn About Us Text"
                                            label-for="learnAboutUs"
                                            description="">
                                <b-form-input id="learnAboutUs"
                                            type="text"
                                            required
                                            placeholder="Learn About Us Text"
                                            v-model="learnAboutUs">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Our Products Text"
                                            label-for="ourProducts"
                                            description="">
                                <b-form-input id="ourProducts"
                                            type="text"
                                            required
                                            placeholder="Our Products Text"
                                            v-model="ourProducts">
                                </b-form-input>
                            </b-form-group>
                            <b-form-group label="Find A Retailer Text"
                                            label-for="findARetailer"
                                            description="">
                                <b-form-input id="findARetailer"
                                            type="text"
                                            required
                                            placeholder="Find A Retailer Text"
                                            v-model="findARetailer">
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

            for (let prop in window.data.assets) {
                Vue.set(this.$data, prop + 'Src', window.data.assets[prop]);
            }
        },
        data() {
            return {
                siteDescription: '',
                highlight1title: '',
                highlight1description: '',
                highlight1youtube: '',
                highlight1learnMore: '',
                highlight2title: '',
                highlight2description: '',
                highlight2youtube: '',
                highlight2learnMore: '',
                highlight3title: '',
                highlight3description: '',
                highlight3youtube: '',
                highlight3learnMore: '',
                productFeature1title: '',
                productFeature1description: '',
                productFeature1storePageUrl: '',
                productFeature2title: '',
                productFeature2description: '',
                productFeature2storePageUrl: '',
                productFeature3title: '',
                productFeature3description: '',
                productFeature3storePageUrl: '',
                learnAboutUs: '',
                ourProducts: '',
                findARetailer: '',
                productFeatureImage1: null,
                productFeatureImage2: null,
                productFeatureImage3: null,
                productFeatureImage1Src: '',
                productFeatureImage2Src: '',
                productFeatureImage3Src: ''
            }
        },
        methods: {
            setImageForUpload(imageKey, imageSrcKey, event) {
                let $this = this;
                let file = event.srcElement.files[0];
                let reader = new FileReader();

                reader.addEventListener('load', function() {
                    Vue.set($this.$data, imageSrcKey, reader.result);
                });
                
                if (file) {
                    reader.readAsDataURL(file);
                }

                Vue.set($this.$data, imageKey, file);
            },
            onSubmit() {
                let form = new FormData();
                let data = {};
                let title = 'home';

                Object.assign(data, this.$data);

                delete data.productFeatureImage1;
                delete data.productFeatureImage2;
                delete data.productFeatureImage3;
                delete data.productFeatureImage1Src;
                delete data.productFeatureImage2Src;
                delete data.productFeatureImage3Src;

                form.append('title', title);
                form.append('data', JSON.stringify(data));

                if (this.$data.productFeatureImage1) {
                    form.append('productFeatureImage1', this.$data.productFeatureImage1);
                }

                if (this.$data.productFeatureImage2) {
                    form.append('productFeatureImage2', this.$data.productFeatureImage2);
                }

                if (this.$data.productFeatureImage3) {
                    form.append('productFeatureImage3', this.$data.productFeatureImage3);
                }

                axios.post('/admin/save', form).then(response => {
                    window.location.reload(true);
                }).catch(e => {
                    alert('There was an error. Please contact support.');
                });
            }
        }
    }
</script>
