<section class="isipho__breadcrumb hm">
    <div class="wrapper">
        <a href="<?=BASE_URL?>" class="link active"><?=LANG['home']?></a>
        <i class="chevron" data-scarlab="chevron-right" style="color: #323232;transform: scale(1.2);"></i>
        <div class="link"><?= LANG['elctronic_cards']?></div>
        <i class="chevron" data-scarlab="chevron-right" style="color: #323232;transform: scale(1.2);"></i>
    </div>
</section>

<div class="outside__layout-overflow">
    <div class="divider__text-image">
        <span><?=LANG['elctronic_cards']?></span>
        <div class="divider__image overflow-hidden"></div>
    </div>
</div>

<!-- قسم الاشتراك الجديد -->
<div class="custom-subscription-container">
    <div class="custom-video-frame">
        <div class="custom-frame-header">كيفية استخدام البطاقات الإلكترونية</div>
        <div class="custom-video-wrapper">
            <iframe
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <p class="custom-video-description">
            في هذا الفيديو، سنشرح كيفية استخدام البطاقات الإلكترونية والاستفادة منها في عمليات الشراء عبر الإنترنت بكل سهولة وأمان.
        </p>
    </div>
</div>

        <style>
.custom-subscription-container {
    max-width: 850px;
    margin: 2rem auto;
    padding: 20px;
}

.custom-video-frame {
    border: 3px solid #004085;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    position: relative;
    background: #f8f9fa;
    padding: 15px;
}

.custom-frame-header {
    background: #004085;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    border-radius: 10px 10px 0 0;
}

.custom-video-wrapper {
    position: relative;
    padding-top: 56.25%; /* نسبة أبعاد 16:9 */
    margin-top: 10px;
    border-radius: 10px;
    overflow: hidden;
}

.custom-video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
}

.custom-video-wrapper:hover iframe {
    transform: scale(1.02);
}

.custom-video-description {
    text-align: center;
    font-size: 1rem;
    color: #333;
    margin-top: 15px;
    font-weight: 500;
}

@media (max-width: 768px) {
    .custom-subscription-container {
        padding: 10px;
    }

    .custom-frame-header {
        font-size: 1.2rem;
        padding: 10px;
    }
}
        </style>
        `;
    }
});
</script>
