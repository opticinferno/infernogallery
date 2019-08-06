<div class="container">


    <div class="d-none d-lg-block">
        <div id="lightgallery" class="row">
            <% loop $GalleryImage.Sort('SortOrder') %>

                <a  href="$Image.URL" data-sub-html="$Description">

                    <img class="gal-style" src="$Image.Fill($Top.ImageWidth, $Top.ImageHeight).URL" alt="$Tilte"/>

                </a>

            <% end_loop %>
        </div>
    </div>



    <div class="d-block d-lg-none">
        <div id="lightgallery2" class="row">
            <% loop $MyGalleryImages.Sort('SortOrder') %>

                <div href="$Image.URL" data-sub-html="$Description">
                    <img class="gal-style" src="$Image.Fill($Top.ImageHeight,$Top.ImageWidth).URL" alt="$Tilte"/>
                </div>
            <% end_loop %>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightgallery").lightGallery();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightgallery2").lightGallery();
        });
    </script>
</div>