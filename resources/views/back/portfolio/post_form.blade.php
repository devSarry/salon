        </div>
        <form method="POST" action="{{ url($route) }}" accept-charset="UTF-8" class="col">
            {{ csrf_field() }}
            <div class="container">
                <h4 class="page-header">Create New Post</h4>
                <div class="divider"></div>
                <div class="card-panel">
                    <div class="row">
                        <div class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10">
                            <input type="text"
                                   name="title"
                                   class="validate {{ $errors->first('title') ? 'invalid' : '' }}"
                                   value="{{old('title')}}"
                            >
                            <label for="title" class="">Title</label>
                        </div>
                        <div class="input-field col s10">
                            <input type="text"
                                   name="slug"
                                   class="validate {{ $errors->first('slug') ? 'invalid' : '' }}"
                                   value="{{old('slug')}}"
                            >
                            <label for="slug">link: {{ 'http://' . 'url' . '/posts/' }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="summary" class="materialize-textarea" name="body" cols="50" rows="10"></textarea>
                            <label for="body">Description
                                <a href="javascript:void(0)" class="btn btn-floating btn-success tooltipped btn-preview" data-position="right" data-delay="0" data-tooltip="preview" style="width: 20px;height: 20px">
                                    <i class="material-icons right" style="line-height: 20px;font-size: 15px">visibility</i>
                                </a>
                            </label>
                            <div id="preview-modal" class="modal">
                                <div class="modal-content markdown-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div id="preview-modal" class="modal">
                            <div class="modal-content markdown-body"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect btn-success">Post <i class="material-icons right">send</i></button>
                            <input type="checkbox" id="publish" name="publish" class="filled-in"/>
                            <label for="publish">Publish</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @section('script')
    <script>
        var baseUrl = 'link: http://***url***/posts/';

        $(function () {
            $(document).on('keyup', '#slug', function () {
                $('label[for="slug"]').html(baseUrl + $(this).val());
            });

            $('.btn-preview').on('click', function(){
                var content = marked($('#content').val());
                var body = $('.markdown-body');

                body.children().remove();
                body.append(content);
                Prism.highlightAll();
                $('#preview-modal').openModal();
            });
        });

        Dropzone.autoDiscover = false;
        jQuery(document).ready(function() {

            $("div#my-awesome-dropzone").dropzone({
                url: "/file/post"
            });

        });

        Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

            // The configuration we've talked about above
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFiles: 1,

            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function() {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                });
                this.on("successmultiple", function(files, response) {
                    // Gets triggered when the files have successfully been sent.
                    // Redirect user or notify of success.
                });
                this.on("errormultiple", function(files, response) {
                    // Gets triggered when there was an error sending the files.
                    // Maybe show form again, and notify user of error
                });
            }

        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop