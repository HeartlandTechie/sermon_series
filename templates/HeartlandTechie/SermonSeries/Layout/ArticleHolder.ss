<% loop $Children %>
    <div class="item col-md-6">
        <div class="image">
            <a href="$Link">
                <span class="btn btn-default">Read More</span>
            </a>
            <img src="http://placehold.it/766x515" alt="" />
        </div> <div class="tag"><i class="fa fa-file-text"></i></div>
        <div class="info-blog">
            <ul class="top-info">
                <li><i class="fa fa-calendar"></i> July 30, 2014</li>
                <li><i class="fa fa-comments-o"></i> 2</li>
                <li><i class="fa fa-tags"></i> $Title </li>
            </ul>
            <h3><a href="$Link">$Title</a></h3>
            <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla felis, sed molestie libero porttitor in.</p>
        </div>
    </div>
<% end_loop %>