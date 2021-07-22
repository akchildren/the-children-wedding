<section class="page-section" id="playlist">
    <div class="container">
        <div class="row text-center">
            <h2 class="section-heading text-uppercase">Wedding Playlist</h2>
            <p class="large text-muted">We are giving our guests the opportunity to place song requests before the wedding. <br>
                This playlist will be kept up to date with suggestions provided and hopefully will have a mix of songs that everyone can enjoy.</p>
            <div class="col-md-6">
                <form id="playlistForm" name="sentMessage" method="post" action="{{ route('playlist') }}">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="form-group">
                            <input class="form-control" id="artist" type="text" name="artist" placeholder="Artist Name *"
                                   required="required"
                                   data-validation-required-message="Please enter the artist name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="song" type="text" name="song" placeholder="Song Name *"
                                   required="required"
                                   data-validation-required-message="Please enter the song name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="name-playlist" type="text" name="name" placeholder="Your Full Name *"
                                   required="required" data-validation-required-message="Please enter your full name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">
                            Submit
                            Request
                        </button>
                    </div>

                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://open.spotify.com/embed/playlist/436oT1oQxQSSSSzO2QJ3wV"
                        width="100%"
                        height="380"
                        frameborder="0"
                        allowtransparency="true"
                        allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>
</section>
