<div>


    <!-- Start Edit About Section
    ------------------------------>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area ml-1"></i>
                من نحن
            </div>
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <!-- Start Form -->
                <form wire:submit.prevent="updateAbout">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">عنوان القسم</label>
                                <!-- About Title Input
                                -------------------------->
                                <input type="text" name="title" wire:model="title" class="form-control" id="formGroupExampleInput">
                                @error('title') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>اضافة صورة</label>

                                <!-- Upload About Image Input
                                -------------------------->
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" wire:model="image" for="customFile">تحميل صورة</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">اضافة محتوى للقسم</label>

                        <!-- About Brief
                        -------------------------->
                        <textarea class="form-control" wire:model="body" id="formGroupExampleInput2" cols="30" rows="5"></textarea>
                        @error('body') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <!-- button Submit Form
                    -------------------------->
                    <button class="btn btn-primary" >تعديل</button>
                </form>
                <!-- End Form
                --------------->
            </div>
        </div>
    <!-- End Edit About Section -->


</div>
