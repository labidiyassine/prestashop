<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
{if $subcategories}
    <style>
        .swiper-container {
            width: 100%;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide {
            width: 100px; 
            height: 100px; 
            margin: 10px 50px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px; 
        }

        .swiper-slide img {
            border-radius: 50%; 
            object-fit: cover; 
            width: 100%;
            height: 100%;
            border: 3px solid #D3D3D3; 
        }

        .swiper-slide .subcategory-name {
            margin-top: 5px;
            margin-bottom: 5px; 
        }

        .swiper-slide .product-count {
            font-size: 12px;
            color: #666;
        }
    </style>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            {foreach $subcategories as $subcategory}
                <div class="swiper-slide">
                    <img src="{$subcategory.image.large.url}" alt="{$subcategory.name}">
                    <div class="subcategory-name">{$subcategory.name}</div>
                    <div style="margin-bottom:50px" class="product-count">{$subcategory.productCount} products</div>
                </div>
            {/foreach}
        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10, /* Adjust the space between slides */
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
        delay: 2000, // Delay between each slide in milliseconds
        disableOnInteraction: false, 
    }
        });
    </script>
{/if}
