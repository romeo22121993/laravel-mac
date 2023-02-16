@php

$featuredImage = !empty( $guide->img ) ? "/" . $guide->img : '';
$assetType     = $guide->doc_type;

ob_start();
switch ( $assetType ) {
   case 'pdf' : ?>
       <iframe src="<?php echo '/' . $guide->doc_file; ?>#view=Fit" frameborder="0" class="iframe-pdf">
       </iframe>
       <?php
       break;
   case 'png' :
       ?>
       <img src="<?php echo '/' . $guide->doc_file; ?>" alt="image">
       <?php
       break;
   default :
       ?>
       <iframe src="//view.officeapps.live.com/op/embed.aspx?src=<?php echo '/' . $guide->doc_file; ?>" frameborder="0">
       </iframe>
       <?php
   break;
}

$itemImageContent = ob_get_clean();

$imgCustom  = "<img src='". $featuredImage . "' alt='image'>";
$assetImage = ( !empty( $featuredImage ) && ( $assetType != 'png' ) ) ? true : false;

@endphp

<div class="item">

    <div class="item-image btn-view">
        @if ( !empty( $assetImage ) && !empty( $featuredImage ) )
            {!! $imgCustom !!}
        @else
            {!! $itemImageContent !!}
        @endif
        @if ( !empty( $assetImage ) && !empty( $featuredImage ) )
            <div class="item-image-ppt-pdf-word hidden" >
                {!! $itemImageContent !!}
            </div>
        @endif
    </div>

    <div class="item-content">
        <span class="item-topic">
           {{ implode(', ', ( $guide->categories->pluck('title')->toArray() ) ) }}
        </span>
        <h4 class="item-title">
            {{ $guide->title }}
        </h4>
        <div class="item-btn-wrap">
            <a href="#" class="btn btn-view">
                View
            </a>
            <a class="btn btn-download" href="{{ '/' . $guide->doc_file }}" download>
                Download
            </a>
        </div>
    </div>

</div>


