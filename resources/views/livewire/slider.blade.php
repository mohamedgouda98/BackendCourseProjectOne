<div>


    <!-- Start Edit Slider Section-->
    <div class="slider-section">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area ml-1"></i>
                السلايدر
            </div>
            <div class="card-body">
                <!-- Start Form
                ----------------->

                <form wire:submit.prevent="saveSlider">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">عنوان السلايدر</label>
                                <!-- Slider Title Input
                                -------------------------->
                                <input type="text" wire:model="title" class="form-control" id="formGroupExampleInput">
                                @error('title') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>اضافة صورة</label>

                                <!-- Upload Slider Image Input
                                -------------------------->
                                <div class="custom-file">
                                    <input type="file" wire:model="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                    @error('image') <span class="error">{{ $message }}</span> @enderror

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">العنوان الفرعي</label>

                        <!-- Slider Subtitle
                        -------------------------->
                        <textarea class="form-control" wire:model="body" id="formGroupExampleInput2" cols="10" rows="5"></textarea>
                        @error('body') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <!-- button Submit Form
                    -------------------------->
                    <button class="btn btn-primary">إضافة</button>
                </form>
                <!-- End Form
                --------------->

                <!-- Start Services Item preview -->
                <div class="row">

                @foreach($sliders as $slider)
                    <!-- Start Item Services -->
                        <div class="col-12 col-md-4">
                            <div class="card mt-5">
                                <img src="{{asset('storage/slider/'.$slider->image)}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <!-- Item Services Title -->
                                    <h4 class="card-title">{{$slider->title}}</h4>

                                    <!-- Item Services Content -->
                                    <p class="card-text">
                                        {{$slider->title}}
                                    </p>

                                    <!-- Item Services Button Control -->
                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered">تعديل</a>
                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Item Services -->
                    @endforeach

                </div>
                <!-- Start Dervices Item preview -->

            </div>
        </div>
    </div>


    <!-- End Edit Slider Section -->
</div>
