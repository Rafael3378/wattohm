<?php foreach ($params['realization'] as $realization): ?>
    <main>
        <section class="realization">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/carousel/icons8-im1.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/carousel/icons8-im2.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/carousel/icons8-im3.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
            <!-- Boutons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <!-- point cercle -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <h2><?= $realization['title'] ?></h2>
                <h3><?= $realization['id_category'] ?></h3>
                <h3><?= $realization['date'] ?></h3>
                <p><?= $realization['text'] ?></p>
        </section>
    </main>

<?php endforeach ?>