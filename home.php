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
<div id="lscld"></div>

<section class="container__electronic_cards">
    <div class="layout">
        <?php if(is_array($cards)):?>
        <?php foreach ($cards as $card):?>
        <article class="electronic_card">
            <div class="top">
                <div class="electronic_card__image" style="background-image: url(<?= BASE_URL . GET_FILE_PATH_BY_CODE($card['image'])?>)"></div>
                <div class="wrapper">
                    <div class="up">
                        <div class="electronic_card__header"><?= SITE_LANG == 'ar' ? $card['ar_name'] : $card['en_name']?></div>
                    </div>
                    <a href="<?=BASE_URL?>cards/<?= str_replace(' ', '-', $card['en_name'])?>">
                        <div class="down">
                            <div class="details__button">
                                <span><?= LANG['brows_btn']?></span><i class="scarlab-arrow-right" data-scarlab="arrow-right"></i>     
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="diamond__divider_electcards"></div>
        </article>
        <?php endforeach;?>
        <?php else:?>
        <div class="col-12">
            <?= Messages::alert('info', LANG['attention'], LANG['index_p'][46])?>
        </div>
        <?php endif;?>
    </div>
</section>

<!-- سكريبت قسم الاشتراك الجديد -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var targetElement = document.getElementById('lscld');
    if (targetElement) {
        targetElement.innerHTML = `
<div class="custom-subscription-container">
    <div class="custom-video-frame">
        <div class="custom-frame-header">طريقة شراء المُنتجات بكل سهولة</div>
        <div class="custom-video-wrapper">
            <iframe
                src="https://www.youtube.com/embed/J39Cp6WcP_I?si=Yjy3C1-m80Qfegv8" 
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

        <style>
<div class="custom-subscription-container">
    <div class="custom-video-frame">
        <div class="custom-frame-header">طريقة شراء المُنتجات بكل سهولة</div>
        <div class="custom-video-wrapper">
            <iframe
                src="https://www.youtube.com/embed/J39Cp6WcP_I?si=Yjy3C1-m80Qfegv8" 
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<style>
.custom-subscription-container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 20px;
}

.custom-video-frame {
    border: 3px solid transparent;
    border-image-source: linear-gradient(118.36deg, #170430 11.39%, #4B0D6D 50.15%, #7A1C9A 87.89%);
    border-image-slice: 1;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    position: relative;
}

.custom-frame-header {
    background: linear-gradient(118.36deg, #170430 11.39%, #4B0D6D 50.15%, #7A1C9A 87.89%);
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    border-bottom: 2px solid transparent;
    border-image-source: linear-gradient(118.36deg, #170430 11.39%, #4B0D6D 50.15%, #7A1C9A 87.89%);
    border-image-slice: 1;
}

.custom-video-wrapper {
    position: relative;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.custom-video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.custom-video-wrapper::after {
    content: "اضغط لمشاهدة طريقة الاشتراك";
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.custom-video-wrapper:hover::after {
    opacity: 1;
}

.custom-video-wrapper:hover iframe {
    transform: scale(1.02);
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
</script>
