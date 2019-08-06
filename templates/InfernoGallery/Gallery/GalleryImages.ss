<div class="container">


    <div class="d-none d-lg-block">
        <div id="lightgallery" class="row">
            <% loop $GalleryImage.Sort('SortOrder') %>
                <% if $Up.ImageHeight == '' && $Up.ImageWidth == '' %>
                    <a href="$Image.URL" data-sub-html="$Description">
                        <img class="gal-style" src="$Image.Fill(200,200).URL" alt="$Tilte"/>
                    </a>
                <% else %>
                    <a href="$Image.URL" data-sub-html="$Description">
                        <img class="gal-style" src="$Image.Fill($Up.ImageHeight,$Up.ImageWidth).URL" alt="$Tilte"/>
                    </a>

                <% end_if %>

            <% end_loop %>
        </div>
    </div>



    <div class="d-block d-lg-none">
        <div id="lightgallery2" class="row">
            <% loop $MyGalleryImages.Sort('SortOrder') %>
                <% if $Up.ImageHeight == '' && $Up.ImageWidth == '' %>
                    <div href="$Image.URL" data-sub-html="$Description">
                        <img class="gal-style" src="$Image.Fill(200,200).URL" alt="$Tilte"/>
                    </div>
                <% else %>
                    <div href="$Image.URL" data-sub-html="$Description">
                        <img class="gal-style" src="$Image.Fill($Up.ImageHeight,$Up.ImageWidth).URL" alt="$Tilte"/>
                    </div>

                <% end_if %>

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