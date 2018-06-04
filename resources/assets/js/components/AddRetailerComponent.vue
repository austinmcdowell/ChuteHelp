<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-body">
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group 
                                label="Retailer Name"
                                label-for="retailerName">
                                <b-form-input 
                                    id="retailerName"
                                    type="text"
                                    required
                                    placeholder="Retailer Name"
                                    v-model="name"
                                    ></b-form-input>
                            </b-form-group>
                            <b-form-group 
                                label="Retailer Website"
                                label-for="retailerWebsite">
                                <b-form-input 
                                    id="retailerWebsite"
                                    type="text"
                                    required
                                    placeholder="Retailer Website"
                                    v-model="website"
                                    ></b-form-input>
                            </b-form-group>
                            <b-form-group 
                                label="Retailer Rank"
                                label-for="retaileRank">
                                <b-form-input 
                                    id="retailerRank"
                                    type="number"
                                    required
                                    placeholder="Retailer Rank"
                                    v-model="rank"
                                    ></b-form-input>
                            </b-form-group>
                            <div class="form-group">
                                <img :src="logoSrc" />
                                <label for="logoUpload">Upload Logo</label>
                                <input @change.prevent="setImageForUpload($event)" name="logoUpload" class="form-control" type="file" />
                            </div>
                            <h2>Locations</h2>
                            <b-card v-for="(location, index) in locations" :key="`location-${index}`" no-body class="mb-1">
                                <b-card-header header-tag="header" class="p-1" role="tab">
                                    <b-btn block href="#" v-b-toggle="`accordion-${index}`" variant="info">
                                        {{ `${location.address}, ${location.city}, ${location.state} ${location.zip_code}` }}
                                    </b-btn>
                                </b-card-header>
                                <b-collapse v-model="location.shouldShow" :id="`accordion-${index}`">
                                    <b-card-body>
                                        <b-form-group 
                                        label="Address"
                                        label-for="locationAddress">
                                            <b-form-input 
                                                id="locationAddress"
                                                type="text"
                                                required
                                                placeholder="Address"
                                                v-model="location.address"
                                                ></b-form-input>
                                        </b-form-group>
                                        <b-form-group 
                                            label="City"
                                            label-for="locationCity">
                                            <b-form-input 
                                                id="locationCity"
                                                type="text"
                                                required
                                                placeholder="City"
                                                v-model="location.city"
                                                ></b-form-input>
                                        </b-form-group>
                                        <b-form-group 
                                            label="State"
                                            label-for="locationState">
                                            <b-form-select id="locationState" :options="states" v-model="location.state" required></b-form-select>
                                        </b-form-group>
                                        <b-form-group 
                                            label="Zip Code"
                                            label-for="locationZip">
                                            <b-form-input 
                                                id="locationZip"
                                                type="text"
                                                required
                                                placeholder="Zip"
                                                v-model="location.zip_code"
                                                ></b-form-input>
                                        </b-form-group>
                                        <b-form-group 
                                            label="Phone"
                                            label-for="locationPhone">
                                            <b-form-input 
                                                id="locationPhone"
                                                type="text"
                                                required
                                                placeholder="Phone"
                                                v-model="location.phone"
                                                ></b-form-input>
                                                <hr>
                                        </b-form-group>
                                        <a @click.prevent="deleteLocation(location, index)" class="btn btn-danger" href="#">Delete</a>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <a @click.prevent="addLocation" href="#" class="btn btn-primary">Add Location</a>
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
        if (window.retailer) {
            this.id = window.retailer.id;
            this.name = window.retailer.name;
            this.website = window.retailer.website;
            this.logoSrc = window.retailer.logo_url;
            this.locations = window.retailer.locations;
            this.rank = window.retailer.rank;
        }
    },
    data() {
        return {
            id: null,
            name: '',
            website: '',
            logoSrc: '',
            logo: null,
            rank: 0,
            locations: [],
            states: ['AK','AL','AR','AZ','CA','CO','CT','DC','DE','FL','GA','HI','IA','ID','IL','IN','KS','KY','LA','MA', 'MD','ME','MI','MN','MO','MS','MT','NC','ND','NE','NH','NJ','NM','NV','NY','OH','OK','OR','PA','RI','SC','SD','TN','TX','UT','VA','VT','WA','WI','WV','WY']
        }
    },
    methods: {
        setImageForUpload(event) {
            let $this = this;
            let file = event.srcElement.files[0];
            let reader = new FileReader();

            reader.addEventListener('load', function() {
                $this.logoSrc = reader.result;
            });
            
            if (file) {
                reader.readAsDataURL(file);
            }

            this.logo = file;
        },
        addLocation() {
            this.locations.push({
                address: '',
                city: '',
                state: '',
                zip_code: '',
                phone: '',
                rank: 0,
                shouldShow: true,
                newlyAdded: true
            });
        },
        deleteLocation(location, index) {
            let $this = this;

            if (location.newlyAdded) {
                this.locations.splice(index, 1);
                return;
            }

            axios.post(`/admin/location/delete`, {id : location.id}).then(response => {
                $this.locations.splice(index, 1);
            }).catch(e => {
                alert('Something went wrong. Please contact support.');
            });
        },
        onSubmit() {
            let form = new FormData();
            
            if (this.id) {
                form.append('id', this.id);
            }
            
            form.append('name', this.name);
            form.append('website', this.website);
            form.append('rank', parseInt(this.rank));
            
            if (this.logo) {
                form.append('logo', this.logo)
            }

            form.append('locations', JSON.stringify(this.locations));

            axios.post('/admin/retailer/save', form).then(response => {
                window.location = '/admin/retailers';
            }).catch(e => {
                alert('There was an error, please contact support.');
            });

        }
    }
}
</script>
