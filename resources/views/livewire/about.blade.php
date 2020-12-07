<div>


    <!-- Start Edit About Section
    ------------------------------>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area ml-1"></i>
                من نحن
            </div>
            <div class="card-body">
                <!-- Start Form
                ----------------->
                <form  method="post" action="{{route('about')}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">عنوان القسم</label>
                                <!-- About Title Input
                                -------------------------->
                                <input type="text" name="title" wire:model="title" class="form-control" id="formGroupExampleInput">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>اضافة صورة</label>

                                <!-- Upload About Image Input
                                -------------------------->
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">اضافة محتوى للقسم</label>

                        <!-- About Brief
                        -------------------------->
                        <textarea class="form-control" name="body" id="formGroupExampleInput2" cols="30" rows="5">{{$about->body}}</textarea>
                    </div>

                    <!-- button Submit Form
                    -------------------------->
                    <input type="submit" class="btn btn-primary" value="تعديل">
                </form>
                <!-- End Form
                --------------->
            </div>
        </div>
    <!-- End Edit About Section -->


</div>
