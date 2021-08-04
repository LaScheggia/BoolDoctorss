<template>
    <div class="pt-3">
        <div class="d-flex justify-content-center container">
            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img v-if="propic.startsWith('uploads')" class="postcard__img" :src="'storage/'+propic" alt="Image Title" />
                    <img v-else class="postcard__img" :src="propic" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a :to="{ name: 'profile', params: { id } }">{{name}} {{surname}}</a></h1>

                    <div style="positione: relative; margin-bottom: 20px">
                        <div style="position: absolute;color: darkgoldenrod;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div style="position: absolute; color: darkgoldenrod;">
                        <i
                        v-for="star in parseInt(ratingAvg || '0')"
                        :key="star"
                        class="fas fa-star" style="margin-right: 4px;"></i>
                        <!-- rating: {{ ratingAvg }} -->
                        </div>

                        </div>

                    <p>Recensioni ricevute: {{ countRev }}</p>


                    <div class="postcard__subtitle small">

                        <p>{{ truncateText }}</p>
                    </div>


                    <div class="postcard__bar"></div>

                    <div class="postcard__preview-txt">
                        {{ address }}
                    </div>
                    <ul class="postcard__tagbox">
                        <vs-chip color="success" type="gradient" v-for="spec in specializations" :key="spec.id">
                                {{spec.name}}
                        </vs-chip>

                    </ul>
                    <ul class="postcard__tagbox">
                        <vs-button color="success" type="gradient" :to="{ name: 'profile', params: { id } }">Dettagli <i class="fas fa-angle-double-right"></i></vs-button>
                    </ul>

                </div>
            </article>
        </div>
</div>

</template>

<script>
export default {
    name: 'Card',
    props: ['name', 'surname', 'bio', 'specializations', 'propic', 'address', 'id', 'ratingAvg', 'countRev'],
        data(){
            return{
                maxTextLength:300
            }
        },
    computed:{
        truncateText(){ // creo una funzione che tronca il testo dopo 20 caratteri e aggiunge ...
            let text = this.bio;
            if(text.length > this.maxTextLength){
                return text.substr(0,this.maxTextLength) + '...';
            }
            return text;
        }
    }

}
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

$main-blue: #4DB6AC !default;
$main-blue-rgb-015: rgba(0, 137, 123, 0.2) !default;

body {
	font-family: "Baloo 2", cursive;
	font-size: 16px;
	color: rgb(178, 223, 219);
	text-rendering: optimizeLegibility;
	font-weight: initial;
}

.myUl{
    margin-bottom: 0;
    padding-left: 0;
}

.light {
	background: rgb(178, 223, 219);
}

a, a:hover {
	text-decoration: none;
	transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
	margin: 2rem 0;
	text-transform: uppercase;
	text-align: center;
	font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;

  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;


	&.light {
		background-color: #e1e5ea;
	}

	.t-dark {
		color: #18151f;
	}

  a {
    color: inherit;
  }

	h1,	.h1 {
		margin-bottom: 0.5rem;
		font-weight: 500;
		line-height: 1.2;
	}

	.small {
		font-size: 80%;
	}

  .postcard__title {
    font-size: 1.75rem;
  }

  .postcard__img {
    max-height: 180px;
    width: 100%;
    object-fit: cover;
    position: relative;
  }

  .postcard__img_link {
    display: contents;
  }

  .postcard__bar {
    width: 150px;
    height: 15px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
  }

  .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
  }

  .postcard__tagbox {
    display: flex;
    flex-flow: row wrap;
    font-size: 14px;
    margin: 20px 0 0 0;
		padding: 0;
    justify-content: center;

    .tag__item {
      display: inline-block;
      background: rgba(83, 83, 83, 0.4);
      border-radius: 3px;
      padding: 2.5px 10px;
      margin: 0 5px 5px 0;
      cursor: default;
      user-select: none;
      transition: background-color 0.3s;

      &:hover {
        background: rgba(83, 83, 83, 0.8);
      }
    }
  }

  &:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 1;
    border-radius: 10px;
  }

  &:hover .postcard__bar {
    width: 250px;
  }
}

@media screen and (min-width: 769px) {
  .postcard {

    .myUl{
        justify-content: center;
    }
    flex-wrap: inherit;

    .postcard__title {
      font-size: 2rem;
    }

    .postcard__tagbox {
      justify-content: start;
    }

    .postcard__img {
      max-width: 300px;
      max-height: 100%;
      transition: transform 0.3s ease;
    }

    .postcard__text {
      padding: 3rem;
      width: 100%;
    }

    .media.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      background: #18151f;
      top: -20%;
      height: 130%;
      width: 55px;
    }

    &:hover .postcard__img {
      transform: scale(1.1);
    }

    &:nth-child(2n+1) {
      flex-direction: row;
    }

    &:nth-child(2n+0) {
      flex-direction: row-reverse;
    }

    &:nth-child(2n+1) .postcard__text::before {
      left: -18px !important;
      transform: rotate(4deg);
    }

    &:nth-child(2n+0) .postcard__text::before {
      right: -12px !important;
      transform: rotate(-4deg);
    }
  }
}
@media screen and (min-width: 1024px){
		.postcard__text {
      padding: 2rem 3.5rem;
    }

		.postcard__text:before {
      content: "";
      position: absolute;
      display: block;

      top: -20%;
      height: 130%;
      width: 55px;
    }

  .postcard.dark {
		.postcard__text:before {
			background: #18151f;
		}
  }
	.postcard.light {
		.postcard__text:before {
			background: #e1e5ea;
		}
  }

}

/* COLOR */
.postcard .postcard__tagbox .blue.play:hover {
	background: $main-blue;
}
.blue .postcard__title:hover {
	color: $main-blue;
}
.blue .postcard__bar {
	background-color: $main-blue;
}
.blue::before {
	background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
}
.blue:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
}


</style>
