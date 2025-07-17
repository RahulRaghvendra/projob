@push('css')
<style>
     .hero-section {
        background-image: url('../assets/images/bannr.jpg');
        height: 800px;
    background-position: center;
    background-repeat: no-repeat;
    padding-top: 84px;
   
    z-index: 0;
    position: relative;
    }
    /* for carousel**/
 .carousel-control-prev {
    left: -107px !important;
}
    .card {
    border-radius: 15px;
    transition: border 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid #ddd;
}

.card:hover {
  border: 1px solid gold;
  /* box-shadow: 0 0 10px rgba(218, 165, 32, 0.4); */
}
.job-feature-card {
  background-color: #fff;
  border-radius: 12px;
  /* border: 1px solid #f0f0f0; */
  /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03); */
  transition: all 0.3s ease-in-out;
}

.job-feature-card:hover {
  box-shadow: 0 6px 28px rgba(0, 0, 0, 0.08);
  transform: translateY(-5px);
}

.job-feature-icon {
  width: 120px;
  height: 120px;
  background-color: #f9f9f9;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-img {
  width: 100%;
  height: auto;
}

.job-feature-title {
  font-size: 18px;
  color: #111;
  font-weight: 500;
}

.job-feature-subtext {
  font-size: 14px;
  color: #6c757d;
}
.job-city{
    border-radius: 20px;
}
.font-city {
        font-size: 18px;
    font-weight: 600;
}
 @media
    (max-width: 768px) {
        .hero-section {
        height: 411px;
        padding-top: 12px;
        }
        .custom-heading {
            font-size: 28px;
        }
        .search-box-rounded {
         border-radius: 9px;
         }
         .carousel-control-prev {
    left: -35px !important;
}
 .custom-heading-2 {
    font-family: 'Jost', Arial, sans-serif;
    font-weight: 500;
    font-size: 28px;
    line-height: 1.3;
    color: #202124;
}
    }
</style>
@endpush