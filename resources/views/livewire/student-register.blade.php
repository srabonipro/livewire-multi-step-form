<div>
    <form wire:submit.prevent="register">
        {{-- STEP 1 --}}
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/4 - Personal Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter first name" wire:model="first_name">
                                <span class="text-danger">@error('first_name') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last name" wire:model="last_name">
                                <span class="text-danger">@error('last_name') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select class="form-control" wire:model="gender">
                                    <option value="">Choose gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="text-danger">@error('gender') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" placeholder="Enter your age" wire:model="age">
                                <span class="text-danger">@error('age') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" wire:model="description"></textarea>
                            <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- STEP 2 --}}
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter email address" wire:model="email">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter phone number" wire:model="phone">
                                <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Choose Country</label>
                                <select class="form-control" wire:model="country">
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="india">India</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="nepal">Nepal</option>
                                    <option value="bhutan">Bhutan</option>
                                    <option value="italy">Italy</option>
                                </select>
                                <span class="text-danger">@error('country') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="Enter city" wire:model="city">
                                <span class="text-danger">@error('city') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- STEP 3 --}}
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary test-white">STEP 3/4 - Frameword experience</div>
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur dignissimos vitae quidem velit voluptatem, eius corporis dolorum rem pariatur neque labore aperiam obcaecati vel iste consectetur enim repudiandae laudantium ipsum!
                    <div class="frameworks d-flex flex-column align-items-left mt-2">
                        <label for="laravel">
                            <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks"> Laravel
                        </label>
                        <label for="bootstrap">
                            <input type="checkbox" id="bootstrap" value="bootstrap" wire:model="frameworks"> Bootstrap
                        </label>
                        <label for="vuejs">
                            <input type="checkbox" id="vuejs" value="vuejs" wire:model="frameworks"> Vuejs
                        </label>
                        <label for="codeigniter">
                            <input type="checkbox" id="codeigniter" value="codeigniter" wire:model="frameworks"> Codeigniter
                        </label>
                        <label for="cakephp">
                            <input type="checkbox" id="cakephp" value="cakephp" wire:model="frameworks"> CakePHP
                        </label>
                    </div>
                    <span class="text-danger">@error('frameworks') {{ $message }} @enderror</span>
                </div>
            </div>
        </div>

        {{-- STEP 4 --}}
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 4/4 - Attachments</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ab! Temporibus sint sapiente necessitatibus, provident maiores hic, alias atque, facere quae minus officiis? Architecto quasi aut beatae, quia asperiores hic?

                    <div class="form-group mt-3">
                        <label for="cv">CV</label>
                        <input type="file" id="cv" class="form-control" wire:model="cv">
                        <span class="text-danger">@error('cv') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="terms" class="d-block">
                            <input type="checkbox" id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                        </label>
                        <span class="text-danger">@error('terms') {{ $message }} @enderror</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            <div></div>
            <button type="button" class="btn btn-md btn-secondary">Back</button>
            <button type="button" class="btn btn-md btn-success">Next</button>
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        </div>
    </form>
</div>
