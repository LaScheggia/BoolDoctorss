<template>

<div> <!-- div che tiene tutto -->
    <section class="section-medium section-arrow--bottom-center section-arrow-primary-color bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white text-center">
                <h2 class="section-title "> Cosa dicono di noi</h2>
                <p class="section-sub-title">
                    Ecco cosa dice di noi chi si è già affidato a iSpecialists
                    <br> per trovare lo specialista adatto alle proprie esigenze.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-primary t-bordered">
    <div class="container">
        <div class="row testimonial-three testimonial-three--col-three">
            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Ugo -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=69">
                    </div>
                    <div class="testimonial-content">
                        <p>
                            Che sito fantastico! Comodissimo perché posso cercare i dottori anche da mobile!
                        </p>
                    </div>
                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Ugo de Ughi</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Musicista</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Gianfraschio -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=65">
                    </div>
                    <div class="testimonial-content">
                        <p>
                            Comodissimo il poter inviare al dottore un messaggio! Dovrebbe esserci su tutti i siti!!
                        </p>
                    </div>
                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Gianfraschio </strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Pensionato</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Marisa -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=9">
                    </div>
                    <div class="testimonial-content">
                        <p>
                            Mi piace tantissimo!! Ho finalmente risolto il mio problema alla schiena con la dottoressa trovata qua sopra! Finalemnte posso tornare a fare la stripper!
                        </p>
                    </div>
                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Marisa Belarda</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Stripper professionista</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Andrej -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=11">
                    </div>

                    <div class="testimonial-content">
                        <p>
                            Non trovo sito migliore che questo! Ho avuto un problema dove non riuscivo a contattare lo specialista di cui avevo bisogno e l'assistenza mi ha subito risolto il problema.
                        </p>
                    </div>

                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Andrej PerBoschi</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Boscaiolo</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Maria -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=19">
                    </div>
                    <div class="testimonial-content">
                        <p>
                            Fantastico! Finalmente una piattaforma dove trovare tutti i professionisti della città di Milano! Ora non dovrò più perdere pomeriggi a cercare su google un dottore!
                        </p>
                    </div>
                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Maria Chespanzada</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Tuffatrice</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 testimonial-three-col"> <!-- testimonial: Galina -->
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://i.pravatar.cc/150?img=29">
                    </div>

                    <div class="testimonial-content">
                        <p>
                            La miglior piattaforma in circolazione! Dovrebbe esistere per ogni città non solo per Milano!
                        </p>
                    </div>

                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name">Galina Cocimelova</strong>
                        <span class="testimonial-job-title" itemprop="jobTitle">Cuoca</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="py-5"> <!-- Page Content -->
    <div class="container">
        <h1 class="fw-light">In molti si sono già affidati a iSpecialists..</h1>
        <p class="lead">Unisciti agli oltre 123.000 utenti attivi sulla nostra piattaforma che cercano un professionista adatto alle loro esigenze. Scegli il tuo specialista oggi stesso.</p>
    </div>
    </section> <!-- /Page Content -->
</div> <!-- /div che tiene tutto -->




</template>

<script>
export default {
    name: 'Banner'

}
</script>

<style lang="scss" scoped>
body{margin-top:20px;}
.btn.btn-outline-primary:hover, .bg-primary {
    background-color: #80CBC4 !important;
}
.section-medium {
    padding: 55px 0px;
}
.testimonial-four blockquote:hover::after, .section-arrow-primary-color.section-arrow--bottom-center:after {
    border-right-color: #80CBC4;
}
.section-arrow-primary-color.section-arrow--bottom-center:after {
    background-color: #80CBC4;
    border-right-color: #80CBC4;
    border-bottom-color: #80CBC4;
}
.section-arrow--bottom-center:after {
    z-index: 1;
    position: absolute;
    left: 50%;
    margin-left: -15px;
    content: "";
    position: absolute;
    bottom: -15px;
    width: 30px;
    height: 30px;
    border-right: 1px solid #262626;
    border-bottom: 1px solid #262626;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    background-color: #262626;
}
.text-white h1, .text-white h2, .text-white h3, .text-white h4, .text-white h5, .text-white h6 {
    color: white !important;
}
.section-title {
    font-size: 32px;
    font-weight: 600;
    margin-top: 0.45em;
    margin-bottom: 0.35em;
    color: #303133;

    letter-spacing: -0.02em;
}
.section-sub-title {
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 400;

}
.section-arrow-primary-color.section-arrow--bottom-center:after {
    border-bottom-color: #80CBC4;
}
.section-arrow-primary-color.section-arrow--bottom-center:after{
    background-color: #80CBC4;
}
.special-heading.line span:before, .special-heading.line span:after, .footer.footer-minimal, .t-bordered {
    border-top-color: #eaeaea;
}
.t-bordered {
    border-top: 1px solid #eaeaea;
}
.section-primary {
    padding: 75px 0px;
}
section {
    position: relative;
}



.testimonial-two {
    padding: 20px;
    border: 2px solid #80CBC4;
    border-radius: 2px;
}


.testimonial-two blockquote p:before {

    font-size: 54px;
    color: #0cb4ce;
    font-weight: 900;
    left: 10px;
    color: #FFF;
    content: "“";
    font-style: normal;
    line-height: 1;
    position: absolute;
    top: 5px;
    font-size: 45px;
}

.testimonial-two blockquote p:after {

    font-size: 54px;
    color: #0cb4ce;
    content: "”";
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    bottom: -0.5em;
    right: 10px;
    font-weight: 900;
    transform: scaleY(-1);
    font-size: 45px;
    bottom: -5px;
}


.testimonial-two blockquote {
    padding: 15px 15px 15px 48px;
    position: relative;
}

.testimonial-two blockquote p:before,
.testimonial-two blockquote p:after {
    color: #0cb4ce;
    font-weight: 900;
}

.testimonial-two blockquote p {
    font-size: inherit;
    font-weight: inherit;
}

.testimonial-two .testimonial-author p {
    color: #999;
    margin: 0 0 0 25px;
    text-align: left;
}

.testimonial-two .testimonial-author strong {
    display: block;
    padding-top: 10px;
    margin-bottom: -2px;
    font-weight: 500;
    font-size: 14px;
    color: #444;
}

.testimonial-two .testimonial-author span {
    color: #666;
    display: block;
    font-size: 12px;
}

.testimonial-two .testimonial-author .testimonial-author-thumbnail {
    float: left;
    margin-right: 15px;
    width: auto;
}

.testimonial-two .testimonial-author img {
    max-width: 55px;
}

.testimonial-two .testimonial-author {
    margin-left: 12px;
    margin-bottom: 15px;
}


.testimonial-two .owl-theme .owl-nav.disabled + .owl-dots {
    margin-top: 0px;
}

.testimonial-two .owl-theme .owl-dots {
    text-align: left;
    margin-left: 50px;
}

.testimonial-two .owl-carousel .owl-dots .owl-dot.active span,
.testimonial-two .owl-carousel .owl-dots .owl-dot:hover span {
       border-color: #0cb4ce;
}

.testimonial-two .owl-carousel .owl-dots .owl-dot.active span:before,
.testimonial-two .owl-carousel .owl-dots .owl-dot:hover span:before {
    background-color: #0cb4ce;
}




.testimonial-three .testimonial-image {
    float: left;
    margin: 0 20px 0 0;
    width: 80px;
    height: 80px;
    border-radius: 100px;
    overflow: hidden;
}

.testimonial-three .testimonial-content {
    overflow: hidden;
}

.testimonial-three .testimonial-meta {
    position: relative;
    overflow: hidden;
    margin-left: 100px;
}


.testimonial-three .testimonial-name {
    display: block;
}


.testimonial-three .testimonial-three-col {
    padding-bottom: 35px;
}

.testimonial-three .testimonial-three-col {
    border-right-style: dashed;
    border-right-width: 1px;
    border-bottom-style: dashed;
    border-bottom-width: 1px;
    border-right-color: #ddd;
    border-bottom-color: #ddd;
    padding: 25px;
}

.testimonial-three .testimonial-three-col:hover {
   background-color:#f7f7f7;
}

.alternate-color .testimonial-three .testimonial-three-col:hover {
   background-color:white;
}

.testimonial-three.testimonial-three--col-two .testimonial-three-col:nth-child(2n) {
    border-right: none;
}

.testimonial-three.testimonial-three--col-two .testimonial-three-col:nth-last-child(-n+2),
.testimonial-three.testimonial-three--col-two .testimonial-three-col:last-child {
    border-bottom: none;
}

.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-child(3n) {
    border-right: none;
}

.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-last-child(-n+3),
.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-last-child(-n+2),
.testimonial-three.testimonial-three--col-three .testimonial-three-col:last-child {
    border-bottom: none;
}







.testimonial-four .testimonial-author .testimonial-author-thumbnail {
   float: left;
   margin-right: 15px;
   width: auto;
}

.testimonial-four .testimonial-author img {
   max-width: 55px;
}

.testimonial-four .testimonial-author strong {
   display: block;
   padding-top: 10px;
   margin-bottom: -2px;
   font-weight: 500;
   font-size: 14px;
   color: #444;
}

.testimonial-four .testimonial-author span {
   color: #666;
   display: block;
   font-size: 12px;
}

.testimonial-four blockquote {
   padding: 30px;
   width: 100%;
   border-radius: 4px;
   position: relative;
   margin-bottom: 20px;
   padding-bottom: 25px;
   border: 2px solid #eaeaea;
}

.testimonial-four blockquote::after {
   content: "";
   border-right: 2px solid #eaeaea;
   border-bottom: 2px solid #eaeaea;
   -webkit-transform: rotate(55deg);
   -moz-transform: rotate(55deg);
   -ms-transform: rotate(55deg);
   -o-transform: rotate(55deg);
   transform: rotate(55deg);
   position: absolute;
   left: 55px;
   bottom: -12px;
   width: 15px;
   height: 21px;
   overflow: hidden;
   background: white;
}

.testimonial-four .owl-theme .owl-nav.disabled + .owl-dots {
   position: absolute;
   float: right;
   text-align: right;
   right: 3px;
   bottom: 40px;
}

.testimonial-four .testimonial-author {
   position: relative;
   overflow: hidden;
}

.testimonial-four blockquote:hover::after {
   border-right: 2px solid #0cb4ce;
   border-bottom: 2px solid #0cb4ce;
}

.testimonial-four blockquote:hover {
   border: 2px solid #0cb4ce;
}





.testimonial-five blockquote p {
    font-weight: 400;
    font-size: 14.58px;
    line-height: 1.6;
    margin-bottom:0;
}

.testimonial-five .testimonial-author .testimonial-author-thumbnail {
   float: left;
   margin-right: 15px;
   width: auto;
}

.testimonial-five .testimonial-author img {
   max-width: 55px;
}

.testimonial-five .testimonial-author strong {
   display: block;
   padding-top: 10px;
   margin-bottom: -2px;
   font-weight: 600;
   font-size: 13px;
}

.testimonial-five .testimonial-author span {
   color: #666;
   display: block;
   font-size: 12px;
}

.testimonial-five blockquote {
   padding: 32px 41px 37px;
   width: 100%;
   border-radius: 4px;
   position: relative;
   margin-bottom: 30px;
   border: 0px solid #eaeaea;
   background-color: #f7f7f7;
}

.testimonial-five blockquote::after {
   content: "";
   border-right: 0px solid #eaeaea;
   border-bottom: 0px solid #eaeaea;
   -webkit-transform: rotate(55deg);
   -moz-transform: rotate(55deg);
   -ms-transform: rotate(55deg);
   -o-transform: rotate(55deg);
   transform: rotate(55deg);
   position: absolute;
   left: 55px;
   bottom: -10px;
   width: 15px;
   height: 21px;
   overflow: hidden;
   background: #f7f7f7;
}

.testimonial-five.testimonial-light blockquote{
   background-color:white;
}
.testimonial-five.testimonial-light blockquote::after {
   background: white;
}


.testimonial-five .owl-theme .owl-nav.disabled + .owl-dots {
   position: absolute;
   float: right;
   text-align: right;
   right: 3px;
   bottom: 40px;
}

.testimonial-five .testimonial-author {
   position: relative;
   overflow: hidden;
}

.testimonial-five blockquote:before {
    content: "“";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 170px;
    color: rgba(189, 189, 189, 0.2);
    position: absolute;
    top: 10px;
    left: 20px;
}
img {
    max-width: 100%;
    height: auto;
}

</style>
