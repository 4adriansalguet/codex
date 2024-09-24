@extends('layouts.app')

@section('title', 'Get a Quote')

@section('content')
    <div class="pages">
        <div class="hero-pages">
            <div class="d-flex justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">Request a Quote</h1>
                <p data-aos="fade-up" data-aos-delay="200">Get a Personalized Quote</p>
                <p  data-aos="fade-up" data-aos-delay="300">Please fill out all the applicable information for us to give you a more suitable package that fits your budget.</p>
            </div>
        </div>
    
        <section class="get-quote-section-1 section-overlap-top">
            <div class="container">
                <div class="card border-0 p-4 shadow-sm" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-body">
                        @if(\Str::contains(Request::fullUrl(), 'pricing_name'))
                            @if(isset($_GET['pricing_name']))
                                <div class="text-center mb-4">
                                    <img class="img-fluid" src="{{$_GET['price_img_url']}}" alt="image price">
                                    <h3>{{$_GET['price']}}</h3>
                                    <h5>{{$_GET['pricing_name']}}</h5>
                                </div>
                            @endif
                        @endif
                        <div class="d-flex gap-4">
                            <a href="">
                                <i class='bx bxl-facebook-circle bx-sm text-primary'></i>
                            </a>
                            <a href="">
                                <i class='bx bxl-linkedin bx-sm text-primary'></i>
                            </a>
                            <a href="">
                                <i class='bx bxl-instagram bx-sm text-primary'></i>
                            </a>
                        </div>
                        <form action="{{route('submit.quote.request')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="slug" value="{{URL::current()}}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="firstname" class="form-label">Your First Name</label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="Your First Name">
                                        @error('firstname')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="lastname" class="form-label">Your Last Name</label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname"" value="{{ old('lastname') }}" placeholder="Your Last Name">
                                        @error('lastname')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"" value="{{ old('email') }}" placeholder="Your Email">
                                        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="phone" class="form-label">Your Phone Number <small>(+ Country code)</small> </label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"" value="{{ old('phone') }}" placeholder="exp:+123-456">
                                        @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="country" class="form-label">Your Country</label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country"" value="{{ old('country') }}" placeholder="Your Country">
                                        @error('country')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-2">
                                        <label for="projectType" class="form-label">Project Type</label>
                                        @if(\Str::contains(Request::fullUrl(), 'pricing_name'))
                                            @if(isset($_GET['pricing_name']))
                                                <input type="text" class="form-control @error('projectType') is-invalid @enderror" name="projectType" value="{{$_GET['project_type']}}">
                                                @error('projectType')<small class="text-danger">{{ $message }}</small>@enderror
                                            @else
                                            <select name="projectType" id="projectType" class="form-control">
                                                <option selected disabled>Choose..</option>
                                                <option value="Web Design">Web Design</option>
                                                <option value="E-Commerce">E-Commerce</option>
                                                <option value="SEO">SEO</option>
                                                <option value="SMM">SMM</option>
                                            </select>
                                            @error('projectType')<small class="text-danger">{{ $message }}</small>@enderror
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my-2">
                                        <div class="card drag-and-frop" id="draAndDrop">
                                            <div class="card-body d-flex justify-content-center align-items-center flex-column gap-4">
                                                <p class="drag-header">Drag or drop a file here or Click the button below (Optional)</p>
                                                <small>Upload your beautiful design here if you have one.</small>
                                                @error('attachment')<small class="text-danger">{{ $message }}</small>@enderror
                                                <button type="button" role="button" class="btn btn-outline-primary" onclick="document.getElementById('inputDragAndDrop').click()">Upload a file</button>
                                                <div class="container">
                                                    <div class="preview text-center"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="inputDragAndDrop" class="d-none" name="attachment">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my-2">
                                        <label for="message" class="form-label">Your Message</label>
                                        <textarea name="message" " id="message" rows="6" class="form-control @error('message') is-invalid @enderror" placeholder="Message here">{{ old('message') }}</textarea>
                                        @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                @if(\Str::contains(Request::fullUrl(), 'param'))
                                    @if($_GET['param'] != 0)
                                        <input type="hidden" class="form-control" name="price_img_url" value="{{$_GET['price_img_url']}}">
                                        <input type="hidden" class="form-control" name="price" value="{{$_GET['price']}}">
                                        <input type="hidden" class="form-control" name="pricing_name" value="{{$_GET['pricing_name']}}">
                                    @endif
                                @endif
                            </div>
                            <div class="my-4 text-center">
                                <input type="submit" value="Submit" class="btn btn-primary" onclick="this.form.submit(); this.disabled=true; this.value='Processing..';">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        const dragAndDrop_container = document.querySelector('#draAndDrop');
        const inputDragAndDrop = document.querySelector('#inputDragAndDrop');
        const dragHeader = document.querySelector('.drag-header');
        const preview = document.querySelector('.preview');

        let file;

        inputDragAndDrop.addEventListener('change', function() {
            file = this.files[0];
            previewFile();
        })

        dragAndDrop_container.addEventListener('dragover', function(event){
            event.preventDefault();
            dragHeader.innerHTML = "Release the file to upload";
            dragAndDrop_container.classList.add('active')
        })

        dragAndDrop_container.addEventListener('dragleave', function(){
            dragHeader.innerHTML = "Drag or drop a file here or Click the button below";
            dragAndDrop_container.classList.remove('active')
        })

        dragAndDrop_container.addEventListener('drop', function(evt){
            evt.preventDefault();
            file = evt.dataTransfer.files[0];
            inputDragAndDrop.files = evt.dataTransfer.files;
            previewFile()
        })

        function previewFile(){
            dragHeader.innerHTML = "";
            let fileType = file.type;
            let validExtensions = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
            if(validExtensions.includes(fileType)){
                let fileReader = new FileReader();

                if(fileType == 'application/pdf'){
                    fileReader.onload = () => {
                        let fileName = file.name;
                        let imgTag = `<i class='bx bxs-file-pdf text-danger bx-md'></i><br><small></small>${fileName}</small>`;
                        preview.innerHTML = imgTag;
                        dragHeader.innerHTML = "Your File has been uploaded";
                    };
                }else{
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        let imgTag = `<img class="img-fluid img-preview" src="${fileURL}" alt="filename">`;
                        preview.innerHTML = imgTag;
                        dragHeader.innerHTML = "Your File has been uploaded";
                    };
                }
                fileReader.readAsDataURL(file)
            }else{
                dragHeader.innerHTML = '<small class="text-danger">File is not supported</small>';
            }
        }
    
    </script>
@endsection