<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TumblerKita</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

html{
    scroll-behavior:smooth;
}

/* ================= NAVBAR ================= */

.navbar-custom{
    background:linear-gradient(90deg,#8c1dff,#c52dff);
    height:90px;
}

.logo{
    width:70px;
    height:70px;
    border-radius:50%;
}

.brand-text{
    font-size:28px;
    font-weight:700;
    color:white !important;
    margin-left:10px;
    cursor:pointer;
}

.nav-link{
    color:white !important;
    font-size:20px;
    margin:0 15px;
    font-weight:500;
}

.nav-link:hover{
    color:#f0dfff !important;
}

.nav-icons{
    display:flex;
    align-items:center;
    gap:20px;
}

.nav-icons i{
    color:white;
    font-size:26px;
    cursor:pointer;
    transition:.2s;
}

.nav-icons i:hover{
    opacity:.8;
}

.cart-wrapper{
    position:relative;
    cursor:pointer;
}

.cart-badge{
    position:absolute;
    top:-8px;
    right:-10px;
    background:#ff35b5;
    color:white;
    font-size:11px;
    font-weight:700;
    width:20px;
    height:20px;
    border-radius:50%;
    display:none;
    align-items:center;
    justify-content:center;
}

.cart-badge.show{
    display:flex;
}

.user-wrapper{
    position:relative;
}

.user-dropdown{
    position:absolute;
    top:45px;
    right:0;
    background:white;
    border-radius:16px;
    box-shadow:0 10px 40px rgba(0,0,0,.15);
    min-width:220px;
    overflow:hidden;
    display:none;
    z-index:999;
}

.user-dropdown.show{
    display:block;
}

.user-dropdown a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:16px 22px;
    text-decoration:none;
    color:#333;
    font-size:16px;
    font-weight:500;
    transition:.15s;
}

.user-dropdown a:hover{
    background:#f0dfff;
    color:#9337ff;
}

.user-dropdown a i{
    font-size:22px;
    color:#9337ff;
}

.user-dropdown hr{
    margin:0;
    border-color:#eee;
}

/* ================= LOGIN PAGE ================= */

.login-page{
    min-height:100vh;
    display:flex;
    overflow:hidden;
}

.login-left{
    flex:1;
    background:linear-gradient(135deg,#fce4ec 0%,#f8bbd0 30%,#f48fb1 60%,#ce93d8 100%);
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    padding:60px 50px;
    text-align:center;
    position:relative;
    overflow:hidden;
}

.login-left::before{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:200%;
    height:200%;
    background:radial-gradient(circle at 30% 40%,rgba(255,255,255,.15) 0%,transparent 50%),
               radial-gradient(circle at 70% 60%,rgba(156,40,255,.08) 0%,transparent 40%);
    animation:loginBgFloat 15s ease-in-out infinite;
}

@keyframes loginBgFloat{
    0%,100%{transform:translate(0,0) rotate(0deg);}
    50%{transform:translate(-20px,20px) rotate(3deg);}
}

.login-left-content{
    position:relative;
    z-index:2;
}

.login-left .login-brand{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
    margin-bottom:30px;
}

.login-left .login-brand img{
    width:60px;
    height:60px;
    border-radius:50%;
    box-shadow:0 4px 15px rgba(0,0,0,.1);
}

.login-left .login-brand span{
    font-size:26px;
    font-weight:800;
    color:#7b1fa2;
}

.login-left h1{
    font-size:44px;
    font-weight:900;
    color:#6a1b9a;
    margin-bottom:15px;
    line-height:1.2;
    position:relative;
    z-index:1;
}

.login-left p{
    font-size:18px;
    color:#8e24aa;
    max-width:380px;
    margin:0 auto;
    line-height:1.6;
    position:relative;
    z-index:1;
    opacity:.85;
}

.login-tumblers{
    display:flex;
    align-items:flex-end;
    justify-content:center;
    gap:20px;
    margin-top:50px;
    position:relative;
    z-index:1;
}

.tumbler-item{
    display:flex;
    flex-direction:column;
    align-items:center;
    animation:floatTumbler 3s ease-in-out infinite;
}

.tumbler-item:nth-child(1){ animation-delay:0s; }
.tumbler-item:nth-child(2){ animation-delay:.5s; }
.tumbler-item:nth-child(3){ animation-delay:1s; }

@keyframes floatTumbler{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-15px);}
}

.tumbler-svg{
    filter:drop-shadow(0 8px 20px rgba(0,0,0,.15));
}

.login-plant{
    position:absolute;
    bottom:0;
    z-index:1;
}

.login-plant-left{
    left:20px;
}

.login-plant-right{
    right:20px;
}

.login-right{
    width:520px;
    flex-shrink:0;
    background:white;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    padding:60px 55px;
    position:relative;
}

.login-right h2{
    font-size:34px;
    font-weight:800;
    color:#333;
    margin-bottom:6px;
}

.login-right .login-subtitle{
    font-size:15px;
    color:#999;
    margin-bottom:35px;
}

.login-form{
    width:100%;
    max-width:400px;
}

.login-form .form-group{
    margin-bottom:22px;
}

.login-form label{
    font-weight:600;
    color:#333;
    font-size:14px;
    margin-bottom:8px;
    display:block;
}

.login-form .input-icon-wrap{
    position:relative;
}

.login-form .input-icon-wrap i{
    position:absolute;
    left:16px;
    top:50%;
    transform:translateY(-50%);
    color:#c52dff;
    font-size:20px;
}

.login-form .input-icon-wrap input{
    width:100%;
    padding:15px 16px 15px 50px;
    border:2px solid #eee;
    border-radius:14px;
    font-size:16px;
    font-family:'Poppins',sans-serif;
    transition:.25s;
    background:#fafafa;
}

.login-form .input-icon-wrap input:focus{
    outline:none;
    border-color:#c52dff;
    box-shadow:0 0 0 4px rgba(197,45,255,.1);
    background:white;
}

.login-form .input-icon-wrap .toggle-pass{
    position:absolute;
    right:16px;
    top:50%;
    transform:translateY(-50%);
    color:#aaa;
    font-size:20px;
    cursor:pointer;
    transition:.2s;
}

.login-form .input-icon-wrap .toggle-pass:hover{
    color:#c52dff;
}

.btn-login{
    width:100%;
    padding:16px;
    border:none;
    border-radius:14px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
    transition:.25s;
    margin-top:8px;
    box-shadow:0 6px 20px rgba(156,40,255,.3);
}

.btn-login:hover{
    opacity:.92;
    transform:translateY(-2px);
    box-shadow:0 8px 25px rgba(156,40,255,.4);
}

.btn-login:active{
    transform:translateY(0);
}

.login-divider{
    display:flex;
    align-items:center;
    gap:15px;
    margin:28px 0;
    color:#bbb;
    font-size:13px;
    font-weight:500;
}

.login-divider::before,
.login-divider::after{
    content:'';
    flex:1;
    height:1px;
    background:#eee;
}

.social-login{
    display:flex;
    gap:12px;
    margin-bottom:28px;
}

.btn-social{
    flex:1;
    padding:13px;
    border:2px solid #eee;
    border-radius:14px;
    background:white;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    transition:.2s;
    color:#555;
}

.btn-social:hover{
    border-color:#c52dff;
    background:#faf5ff;
    transform:translateY(-1px);
}

.login-register-text{
    font-size:14px;
    color:#999;
    text-align:center;
}

.login-register-text a{
    color:#9337ff;
    font-weight:700;
    text-decoration:none;
    transition:.15s;
}

.login-register-text a:hover{
    text-decoration:underline;
    color:#7b1fa2;
}

.login-error{
    background:#fdecea;
    color:#c0392b;
    padding:12px 16px;
    border-radius:12px;
    font-size:14px;
    font-weight:500;
    margin-bottom:15px;
    display:none;
    align-items:center;
    gap:8px;
}

.login-error.show{
    display:flex;
}

/* ================= HERO ================= */

.hero{
    min-height:100vh;
    padding-top:130px;
    padding-bottom:60px;
    text-align:center;
    background:linear-gradient(90deg,#f4ddc7 100%);
}

.hero-logo{
    width:380px;
    margin-bottom:30px;
}

.hero-title{
    font-size:72px;
    font-weight:900;
    line-height:1.2;
    background:linear-gradient(90deg,#ff35b5,#ff8c22);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    background-clip:text;
}

.hero-desc{
    max-width:1000px;
    margin:auto;
    margin-top:35px;
    font-size:28px;
    line-height:1.5;
    background:linear-gradient(90deg,#ff35b5,#ff8c22);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    background-clip:text;
}

/* ================= TENTANG ================= */

.tentang{
    background:linear-gradient(90deg,#d7edf4,#b8e8df);
    padding:80px 20px;
    text-align:center;
}

.tentang h2{
    font-size:56px;
    font-weight:800;
    color:#40473a;
}

.tentang p{
    font-size:26px;
    max-width:1100px;
    margin:auto;
    margin-top:30px;
    line-height:1.5;
    color:#5b5b5b;
}

/* ================= PRODUK ================= */

.produk{
    padding:80px 0;
    background:#fafafa;
}

.judul-produk{
    font-size:56px;
    font-weight:800;
    margin-bottom:40px;
    color:#333;
}

.sidebar{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    position:sticky;
    top:110px;
}

.sidebar h4{
    font-weight:700;
    margin-bottom:25px;
    color:#333;
}

.sidebar a{
    display:block;
    text-decoration:none;
    color:#333;
    padding:15px;
    border-radius:10px;
    margin-bottom:8px;
    font-size:16px;
    transition:.2s;
}

.sidebar a.active{
    background:#f0dfff;
    color:#9337ff;
    font-weight:600;
}

.sidebar a:hover{
    background:#f0dfff;
    color:#9337ff;
}

.product-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    transition:.3s;
    background:white;
    cursor:pointer;
    position:relative;
}

.product-card:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 25px rgba(0,0,0,.12);
}

.product-card img{
    width:100%;
    height:220px;
    object-fit:contain;
    padding:20px;
    background:#fafafa;
}

.product-card .card-body{
    padding:20px;
}

.product-card h5{
    font-size:20px;
    font-weight:600;
    color:#333;
}

.product-card h4{
    font-size:26px;
    font-weight:800;
    margin-top:10px;
    color:#9337ff;
}

.btn-cart{
    width:100%;
    border:none;
    background:linear-gradient(90deg,#9c28ff,#c52dff);
    color:white;
    padding:12px;
    border-radius:12px;
    font-size:16px;
    font-weight:600;
    transition:.2s;
}

.btn-cart:hover{
    opacity:.9;
    transform:scale(1.02);
}

.empty-category{
    text-align:center;
    padding:80px 20px;
}

.empty-category i{
    font-size:70px;
    color:#ddd;
    display:block;
    margin-bottom:20px;
}

.empty-category h4{
    font-size:24px;
    font-weight:700;
    color:#999;
    margin-bottom:10px;
}

.empty-category p{
    font-size:16px;
    color:#bbb;
}

/* ================= PROFILE ================= */

.profile-page{
    padding-top:110px;
    background:#fafafa;
    min-height:100vh;
    display:none;
}

.profile-page h2{
    font-size:36px;
    font-weight:800;
    color:#333;
    margin-bottom:30px;
}

.profile-card{
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.profile-avatar{
    width:100px;
    height:100px;
    border-radius:50%;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:42px;
    font-weight:800;
    margin-bottom:20px;
}

.profile-info-row{
    display:flex;
    align-items:flex-start;
    padding:14px 0;
    border-bottom:1px solid #f5f5f5;
}

.profile-info-row:last-child{
    border-bottom:none;
}

.profile-info-label{
    font-size:15px;
    color:#888;
    font-weight:500;
    width:140px;
    flex-shrink:0;
}

.profile-info-value{
    font-size:17px;
    color:#333;
    font-weight:600;
    flex:1;
}

.profile-info-value input{
    width:100%;
    padding:10px 14px;
    border:2px solid #eee;
    border-radius:12px;
    font-size:16px;
    font-family:'Poppins',sans-serif;
    display:none;
}

.profile-info-value input:focus{
    outline:none;
    border-color:#9337ff;
}

.profile-info-value input.show{
    display:block;
}

.profile-info-value span.hide{
    display:none;
}

.btn-edit-profile{
    padding:12px 28px;
    border:none;
    border-radius:12px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:.2s;
}

.btn-edit-profile:hover{
    opacity:.9;
}

.btn-save-profile{
    padding:12px 28px;
    border:none;
    border-radius:12px;
    background:linear-gradient(90deg,#28a745,#34d058);
    color:white;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:.2s;
    display:none;
}

.btn-save-profile.show{
    display:inline-block;
}

.btn-cancel-profile{
    padding:12px 28px;
    border:2px solid #ddd;
    border-radius:12px;
    background:white;
    color:#555;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:.2s;
    display:none;
    margin-left:10px;
}

.btn-cancel-profile.show{
    display:inline-block;
}

.btn-cancel-profile:hover{
    border-color:#e74c3c;
    color:#e74c3c;
}

.address-card{
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
}

.address-card h4{
    font-size:22px;
    font-weight:700;
    color:#333;
    margin-bottom:15px;
}

.address-card p{
    font-size:17px;
    color:#555;
    line-height:1.7;
}

.btn-ubah{
    padding:10px 24px;
    border:2px solid #9337ff;
    border-radius:12px;
    background:white;
    color:#9337ff;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    transition:.2s;
}

.btn-ubah:hover{
    background:#f0dfff;
}

/* ================= DETAIL PRODUK ================= */

.detail-produk{
    padding-top:110px;
    background:#fafafa;
    min-height:100vh;
    display:none;
}

.btn-kembali{
    background:white;
    color:#8c1dff;
    border:2px solid #8c1dff;
    border-radius:12px;
    padding:10px 25px;
    font-weight:600;
    font-size:18px;
    margin-bottom:30px;
    transition:.2s;
}

.btn-kembali:hover{
    background:#f0dfff;
    color:#8c1dff;
}

.detail-img-box{
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    text-align:center;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
}

.detail-img{
    max-width:100%;
    height:450px;
    object-fit:contain;
}

.detail-title{
    font-size:36px;
    font-weight:800;
    color:#333;
    margin-bottom:10px;
}

.detail-rating{
    display:flex;
    align-items:center;
    gap:5px;
    margin-bottom:15px;
}

.detail-rating i{
    color:#ffc107;
    font-size:22px;
}

.detail-rating span{
    font-size:18px;
    font-weight:600;
    color:#555;
    margin-left:5px;
}

.detail-price{
    font-size:40px;
    font-weight:800;
    color:#9337ff;
    margin-bottom:20px;
}

.detail-desc{
    font-size:17px;
    color:#666;
    line-height:1.7;
    margin-bottom:25px;
}

.detail-variant h5{
    font-weight:700;
    margin-bottom:15px;
    color:#333;
}

.color-options{
    display:flex;
    gap:12px;
    margin-bottom:25px;
}

.color-circle{
    width:40px;
    height:40px;
    border-radius:50%;
    cursor:pointer;
    border:3px solid transparent;
    transition:.2s;
    box-shadow:0 2px 5px rgba(0,0,0,.1);
}

.color-circle.active, .color-circle:hover{
    border-color:#9337ff;
    transform:scale(1.15);
}

.capacity-options{
    display:flex;
    gap:12px;
    margin-bottom:30px;
}

.btn-cap{
    padding:10px 25px;
    border-radius:12px;
    border:2px solid #ddd;
    background:white;
    font-weight:600;
    transition:.2s;
}

.btn-cap.active, .btn-cap:hover{
    border-color:#9337ff;
    color:#9337ff;
    background:#f0dfff;
}

.detail-actions{
    display:flex;
    gap:15px;
    margin-bottom:30px;
}

.btn-add-cart{
    flex:1;
    padding:15px;
    border-radius:12px;
    border:none;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:18px;
    font-weight:700;
    transition:.2s;
}

.btn-add-cart:hover{
    opacity:.9;
}

.btn-save{
    flex:1;
    padding:15px;
    border-radius:12px;
    border:2px solid #9c28ff;
    background:white;
    color:#9c28ff;
    font-size:18px;
    font-weight:700;
    transition:.2s;
    cursor:pointer;
}

.btn-save:hover{
    background:#f0dfff;
}

.btn-save.saved{
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    border-color:transparent;
}

.detail-services{
    display:flex;
    justify-content:space-between;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 0 10px rgba(0,0,0,.05);
}

.service-item{
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    font-size:14px;
    color:#555;
    gap:8px;
}

.service-item i{
    color:#9337ff;
    font-size:28px;
}

/* ================= CHECKOUT ================= */

.checkout-page{
    padding-top:110px;
    background:#fafafa;
    min-height:100vh;
    display:none;
}

.checkout-page h2{
    font-size:36px;
    font-weight:800;
    color:#333;
    margin-bottom:30px;
}

.checkout-card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.cart-item{
    display:flex;
    align-items:center;
    gap:20px;
    padding:18px 0;
    border-bottom:1px solid #f0f0f0;
}

.cart-item:last-child{
    border-bottom:none;
}

.cart-item img{
    width:80px;
    height:80px;
    object-fit:contain;
    border-radius:12px;
    background:#fafafa;
    padding:8px;
}

.cart-item-info{
    flex:1;
}

.cart-item-info h5{
    font-size:18px;
    font-weight:600;
    color:#333;
    margin:0;
}

.cart-item-info p{
    font-size:16px;
    color:#9337ff;
    font-weight:700;
    margin:4px 0 0;
}

.qty-control{
    display:flex;
    align-items:center;
    gap:10px;
}

.qty-control button{
    width:34px;
    height:34px;
    border-radius:10px;
    border:2px solid #ddd;
    background:white;
    font-size:18px;
    font-weight:700;
    color:#333;
    cursor:pointer;
    transition:.15s;
    display:flex;
    align-items:center;
    justify-content:center;
}

.qty-control button:hover{
    border-color:#9337ff;
    color:#9337ff;
}

.qty-control span{
    font-size:18px;
    font-weight:700;
    min-width:30px;
    text-align:center;
}

.btn-remove{
    background:none;
    border:none;
    color:#e74c3c;
    font-size:22px;
    cursor:pointer;
    padding:5px;
    transition:.15s;
}

.btn-remove:hover{
    color:#c0392b;
    transform:scale(1.2);
}

/* PROMO CODE */
.promo-section{
    margin-top:20px;
}

.promo-toggle{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:14px 18px;
    border:2px dashed #ddd;
    border-radius:14px;
    cursor:pointer;
    transition:.2s;
    background:#fafafa;
}

.promo-toggle:hover{
    border-color:#c52dff;
    background:#faf5ff;
}

.promo-toggle-left{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:16px;
    font-weight:500;
    color:#555;
}

.promo-toggle-left i{
    font-size:22px;
    color:#c52dff;
}

.promo-toggle-right{
    font-size:15px;
    font-weight:700;
    color:#9337ff;
    display:flex;
    align-items:center;
    gap:4px;
}

.promo-input-area{
    display:none;
    margin-top:12px;
    animation:slideDown .25s ease;
}

.promo-input-area.show{
    display:flex;
    gap:10px;
}

@keyframes slideDown{
    from{opacity:0;transform:translateY(-8px);}
    to{opacity:1;transform:translateY(0);}
}

.promo-input-area input{
    flex:1;
    padding:12px 16px;
    border:2px solid #eee;
    border-radius:12px;
    font-size:15px;
    font-family:'Poppins',sans-serif;
}

.promo-input-area input:focus{
    outline:none;
    border-color:#c52dff;
}

.btn-apply-promo{
    padding:12px 22px;
    border:none;
    border-radius:12px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    white-space:nowrap;
    transition:.2s;
}

.btn-apply-promo:hover{
    opacity:.9;
}

.promo-success{
    display:none;
    margin-top:10px;
    padding:10px 14px;
    border-radius:10px;
    background:#d4edda;
    color:#28a745;
    font-size:14px;
    font-weight:600;
    align-items:center;
    gap:8px;
}

.promo-success.show{
    display:flex;
}

.promo-error{
    display:none;
    margin-top:10px;
    padding:10px 14px;
    border-radius:10px;
    background:#fdecea;
    color:#c0392b;
    font-size:14px;
    font-weight:600;
    align-items:center;
    gap:8px;
}

.promo-error.show{
    display:flex;
}

.summary-row{
    display:flex;
    justify-content:space-between;
    padding:10px 0;
    font-size:18px;
    color:#555;
}

.summary-row.total{
    font-size:22px;
    font-weight:800;
    color:#333;
    border-top:2px solid #eee;
    padding-top:15px;
    margin-top:10px;
}

.form-label{
    font-weight:600;
    color:#333;
    margin-bottom:8px;
}

.form-control{
    border-radius:12px;
    padding:12px 16px;
    border:2px solid #eee;
    font-size:16px;
}

.form-control:focus{
    border-color:#9337ff;
    box-shadow:0 0 0 .2rem rgba(156,40,255,.15);
}

.payment-option{
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 18px;
    border:2px solid #eee;
    border-radius:12px;
    cursor:pointer;
    transition:.15s;
    margin-bottom:10px;
}

.payment-option.selected{
    border-color:#9337ff;
    background:#f8edff;
}

.payment-option input[type="radio"]{
    accent-color:#9337ff;
    width:18px;
    height:18px;
}

.payment-option label{
    font-size:16px;
    font-weight:500;
    cursor:pointer;
    margin:0;
}

.btn-buat-pesanan{
    width:100%;
    padding:16px;
    border:none;
    border-radius:14px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:20px;
    font-weight:700;
    transition:.2s;
    margin-top:20px;
}

.btn-buat-pesanan:hover{
    opacity:.9;
    transform:scale(1.01);
}

.empty-cart{
    text-align:center;
    padding:60px 20px;
}

.empty-cart i{
    font-size:80px;
    color:#ddd;
    margin-bottom:20px;
    display:block;
}

.empty-cart h4{
    font-size:24px;
    font-weight:700;
    color:#999;
    margin-bottom:10px;
}

.empty-cart p{
    font-size:16px;
    color:#bbb;
}

/* ================= PESANAN DIPROSES ================= */

.pesanan-diproses{
    padding-top:110px;
    background:#fafafa;
    min-height:100vh;
    display:none;
    text-align:center;
}

.pesanan-diproses h2{
    font-size:36px;
    font-weight:800;
    color:#333;
    margin-bottom:10px;
}

.pesanan-diproses .subtitle{
    font-size:18px;
    color:#888;
    margin-bottom:40px;
}

.process-illustration{
    width:180px;
    margin-bottom:40px;
}

.progress-track{
    display:flex;
    align-items:flex-start;
    justify-content:center;
    gap:0;
    margin-bottom:40px;
}

.progress-step{
    display:flex;
    flex-direction:column;
    align-items:center;
    z-index:2;
}

.step-circle{
    width:50px;
    height:50px;
    border-radius:50%;
    background:#e0e0e0;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:20px;
}

.progress-step.done .step-circle{
    background:linear-gradient(90deg,#9c28ff,#d233ff);
}

.progress-step.current .step-circle{
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    box-shadow:0 0 0 6px rgba(156,40,255,.2);
}

.step-label{
    font-size:12px;
    font-weight:600;
    color:#999;
    margin-top:8px;
    white-space:nowrap;
}

.progress-step.done .step-label,
.progress-step.current .step-label{
    color:#9337ff;
}

.step-time{
    font-size:11px;
    color:#aaa;
    margin-top:2px;
}

.progress-line{
    width:50px;
    height:4px;
    background:#e0e0e0;
    margin-top:23px;
    flex-shrink:0;
}

.progress-line.done{
    background:linear-gradient(90deg,#9c28ff,#d233ff);
}

.order-info-box{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
    max-width:500px;
    margin:0 auto 30px;
    text-align:left;
}

.order-info-box p{
    font-size:17px;
    color:#555;
    margin:8px 0;
}

.order-info-box strong{
    color:#333;
}

.btn-lihat-pesanan{
    padding:14px 40px;
    border:none;
    border-radius:14px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:18px;
    font-weight:700;
    transition:.2s;
}

.btn-lihat-pesanan:hover{
    opacity:.9;
}

/* ================= PESANAN SAYA ================= */

.pesanan-saya{
    padding-top:110px;
    background:#fafafa;
    min-height:100vh;
    display:none;
}

.pesanan-saya h2{
    font-size:36px;
    font-weight:800;
    color:#333;
    margin-bottom:25px;
}

.order-tabs{
    display:flex;
    gap:10px;
    margin-bottom:30px;
    flex-wrap:wrap;
}

.order-tab{
    padding:10px 22px;
    border-radius:12px;
    border:2px solid #ddd;
    background:white;
    font-size:15px;
    font-weight:600;
    color:#555;
    cursor:pointer;
    transition:.15s;
}

.order-tab.active,
.order-tab:hover{
    border-color:#9337ff;
    color:#9337ff;
    background:#f0dfff;
}

.orders-table{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 0 10px rgba(0,0,0,.08);
}

.orders-table table{
    width:100%;
    border-collapse:collapse;
}

.orders-table th{
    background:linear-gradient(90deg,#8c1dff,#c52dff);
    color:white;
    padding:18px 20px;
    font-size:15px;
    font-weight:600;
    text-align:left;
}

.orders-table td{
    padding:16px 20px;
    font-size:15px;
    color:#555;
    border-bottom:1px solid #f0f0f0;
}

.orders-table tr:last-child td{
    border-bottom:none;
}

.status-badge{
    padding:6px 16px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
    display:inline-block;
}

.status-diproses{ background:#fff3cd; color:#d4880f; }
.status-dikirim{ background:#d1ecf1; color:#0c8aa8; }
.status-selesai{ background:#d4edda; color:#28a745; }
.status-dibatalkan{ background:#f8d7da; color:#c0392b; }

.btn-detail-order{
    padding:8px 18px;
    border-radius:10px;
    border:2px solid #9337ff;
    background:white;
    color:#9337ff;
    font-weight:600;
    font-size:14px;
    cursor:pointer;
    transition:.15s;
}

.btn-detail-order:hover{
    background:#f0dfff;
}

/* BELANJA LAGI */
.belanja-again{
    display:flex;
    align-items:center;
    justify-content:space-between;
    background:white;
    border-radius:20px;
    padding:30px 35px;
    margin-top:35px;
    box-shadow:0 0 10px rgba(0,0,0,.08);
}

.belanja-again-left{
    display:flex;
    align-items:center;
    gap:18px;
}

.belanja-icon{
    width:60px;
    height:60px;
    border-radius:16px;
    background:linear-gradient(135deg,#f0dfff,#e8c8ff);
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
}

.belanja-icon i{
    font-size:28px;
    color:#9337ff;
}

.belanja-text h4{
    font-size:20px;
    font-weight:700;
    color:#333;
    margin:0 0 4px;
}

.belanja-text p{
    font-size:14px;
    color:#888;
    margin:0;
    line-height:1.4;
}

.btn-belanja{
    padding:14px 32px;
    border:none;
    border-radius:14px;
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    font-size:16px;
    font-weight:700;
    transition:.2s;
    white-space:nowrap;
    flex-shrink:0;
}

.btn-belanja:hover{
    opacity:.9;
    transform:translateY(-1px);
}

/* ================= TOAST ================= */

.toast-container{
    position:fixed;
    top:100px;
    right:20px;
    z-index:9999;
}

.custom-toast{
    background:linear-gradient(90deg,#9c28ff,#d233ff);
    color:white;
    padding:14px 24px;
    border-radius:14px;
    font-size:16px;
    font-weight:600;
    box-shadow:0 8px 30px rgba(156,40,255,.3);
    display:flex;
    align-items:center;
    gap:10px;
    animation:slideIn .3s ease;
    margin-bottom:10px;
    opacity:0;
    transition:opacity .3s;
}

.custom-toast.show{
    opacity:1;
}

.custom-toast i{
    font-size:22px;
}

@keyframes slideIn{
    from{transform:translateX(100px);opacity:0;}
    to{transform:translateX(0);opacity:1;}
}

/* ================= FOOTER ================= */

.footer{
    background:linear-gradient(90deg,#d233ff,#ff6b55);
    color:white;
    text-align:center;
    padding:60px 20px 20px;
}

.footer h2{ font-size:60px; font-weight:800; }
.footer-sub{ font-size:26px; margin-bottom:50px; opacity:.9; }
.footer-box h4{ font-size:28px; margin-bottom:20px; font-weight:700; }
.footer-box p{ font-size:20px; opacity:.9; }
.footer-box i{ font-size:24px; margin-right:10px; }
.copyright{ margin-top:40px; font-size:18px; opacity:.8; border-top:1px solid rgba(255,255,255,.2); padding-top:20px; }

/* ================= RESPONSIVE ================= */

@media(max-width:768px){
    .hero-title{ font-size:42px; }
    .hero-desc{ font-size:20px; }
    .hero-logo{ width:260px; }
    .judul-produk{ font-size:36px; }
    .tentang h2{ font-size:36px; }
    .tentang p{ font-size:20px; }
    .footer h2{ font-size:40px; }
    .footer-sub{ font-size:20px; }
    .detail-title{ font-size:28px; }
    .detail-price{ font-size:32px; }
    .detail-actions{ flex-direction:column; }
    .detail-services{ flex-direction:column; gap:15px; }
    .cart-item{ flex-wrap:wrap; }
    .progress-line{ width:25px; }
    .step-label{ font-size:10px; }
    .step-circle{ width:40px; height:40px; font-size:16px; }
    .progress-line{ margin-top:18px; }
    .login-page{ flex-direction:column; }
    .login-left{ padding:40px 20px; min-height:auto; }
    .login-left h1{ font-size:30px; }
    .login-right{ width:100%; padding:40px 25px; }
    .login-tumblers{ gap:12px; margin-top:30px; }
    .profile-info-row{ flex-direction:column; gap:5px; }
    .profile-info-label{ width:auto; }
    .belanja-again{ flex-direction:column; text-align:center; gap:20px; }
    .belanja-again-left{ flex-direction:column; }
}

</style>

</head>

<body>

<!-- TOAST -->
<div class="toast-container" id="toast-container"></div>

<!-- ==================== LOGIN PAGE ==================== -->
<section id="login-page" class="login-page">

<div class="login-left">

<!-- Tanaman kiri -->
<svg class="login-plant login-plant-left" width="80" height="160" viewBox="0 0 80 160" xmlns="http://www.w3.org/2000/svg">
<path d="M40 160 Q40 120 20 100 Q0 80 10 50 Q20 20 40 0" fill="none" stroke="#4caf50" stroke-width="3" opacity=".4"/>
<ellipse cx="15" cy="55" rx="18" ry="10" fill="#66bb6a" opacity=".3" transform="rotate(-30 15 55)"/>
<ellipse cx="30" cy="80" rx="15" ry="9" fill="#81c784" opacity=".3" transform="rotate(20 30 80)"/>
</svg>

<!-- Tanaman kanan -->
<svg class="login-plant login-plant-right" width="80" height="160" viewBox="0 0 80 160" xmlns="http://www.w3.org/2000/svg">
<path d="M40 160 Q40 120 60 100 Q80 80 70 50 Q60 20 40 0" fill="none" stroke="#4caf50" stroke-width="3" opacity=".4"/>
<ellipse cx="65" cy="55" rx="18" ry="10" fill="#66bb6a" opacity=".3" transform="rotate(30 65 55)"/>
<ellipse cx="50" cy="80" rx="15" ry="9" fill="#81c784" opacity=".3" transform="rotate(-20 50 80)"/>
</svg>

<div class="login-left-content">

<div class="login-brand">
<img src="https://i.imghippo.com/files/Uo9993KIo.png" alt="Logo">
<span>TumblerKita</span>
</div>

<h1>Selamat Datang<br>di TumblerKita</h1>
<p>Temukan berbagai tumbler berkualitas untuk menemani hari-harimu ✨</p>

<div class="login-tumblers">

<!-- Tumbler Pink -->
<svg class="tumbler-svg" width="80" height="130" viewBox="0 0 80 130" xmlns="http://www.w3.org/2000/svg">
<rect x="10" y="25" width="60" height="95" rx="12" fill="#ff9eb5"/>
<rect x="14" y="16" width="52" height="18" rx="6" fill="#ffc1d4"/>
<rect x="14" y="16" width="52" height="8" rx="4" fill="#ffd6e4"/>
<ellipse cx="40" cy="75" rx="16" ry="16" fill="white" opacity=".25"/>
<ellipse cx="40" cy="120" rx="25" ry="4" fill="#e91e63" opacity=".2"/>
</svg>

<!-- Tumbler Ungu (besar) -->
<svg class="tumbler-svg" width="90" height="150" viewBox="0 0 90 150" xmlns="http://www.w3.org/2000/svg">
<rect x="10" y="28" width="70" height="110" rx="14" fill="#c52dff"/>
<rect x="15" y="16" width="60" height="22" rx="7" fill="#d96fff"/>
<rect x="15" y="16" width="60" height="10" rx="5" fill="#e8a8ff"/>
<ellipse cx="45" cy="85" rx="20" ry="20" fill="white" opacity=".2"/>
<text x="45" y="92" text-anchor="middle" fill="white" font-size="14" font-weight="bold" font-family="Poppins" opacity=".6">TK</text>
<ellipse cx="45" cy="138" rx="28" ry="5" fill="#8c1dff" opacity=".2"/>
</svg>

<!-- Tumbler Hijau -->
<svg class="tumbler-svg" width="75" height="120" viewBox="0 0 75 120" xmlns="http://www.w3.org/2000/svg">
<rect x="8" y="22" width="58" height="90" rx="11" fill="#8fd9a8"/>
<rect x="12" y="14" width="50" height="16" rx="5" fill="#b8e8c8"/>
<rect x="12" y="14" width="50" height="7" rx="4" fill="#d0f0db"/>
<ellipse cx="37" cy="67" rx="14" ry="14" fill="white" opacity=".25"/>
<ellipse cx="37" cy="112" rx="22" ry="4" fill="#4caf50" opacity=".2"/>
</svg>

</div>

</div>
</div>

<div class="login-right">
<h2>Masuk</h2>
<p class="login-subtitle">Masuk ke akun TumblerKita kamu</p>

<div class="login-form">

<div class="login-error" id="login-error">
<i class="bi bi-exclamation-circle"></i>
<span id="login-error-text">Email atau password salah!</span>
</div>

<div class="form-group">
<label>Email / Username</label>
<div class="input-icon-wrap">
<i class="bi bi-envelope"></i>
<input type="text" id="login-email" placeholder="Masukkan email atau username">
</div>
</div>

<div class="form-group">
<label>Password</label>
<div class="input-icon-wrap">
<i class="bi bi-lock"></i>
<input type="password" id="login-password" placeholder="Masukkan password">
<i class="bi bi-eye toggle-pass" id="toggle-pass" onclick="togglePassword()"></i>
</div>
</div>

<button class="btn-login" onclick="doLogin()">Login</button>

<div class="login-divider">atau masuk dengan</div>

<div class="social-login">
<button class="btn-social" onclick="doLogin()">
<svg width="20" height="20" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
Google
</button>
<button class="btn-social" onclick="doLogin()">
<svg width="20" height="20" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
Facebook
</button>
</div>

<p class="login-register-text">Belum punya akun? <a href="#" onclick="doLogin();return false;">Daftar di sini</a></p>

</div>
</div>

</section>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="main-navbar" style="display:none;">
<div class="container-fluid px-4">
<a class="navbar-brand d-flex align-items-center" href="#" onclick="showMain();return false;">
<img src="https://i.imghippo.com/files/Uo9993KIo.png" alt="Logo" class="logo">
<span class="brand-text">TumblerKita</span>
</a>
<button class="navbar-toggler bg-white" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="#home" onclick="showMain()">Awalan</a></li>
<li class="nav-item"><a class="nav-link" href="#produk" onclick="showMain()">Produk</a></li>
<li class="nav-item"><a class="nav-link" href="#tentang" onclick="showMain()">Tentang</a></li>
</ul>
<div class="nav-icons">
<i class="bi bi-search"></i>
<div class="cart-wrapper" onclick="showCheckout()">
<i class="bi bi-cart3"></i>
<span class="cart-badge" id="cart-badge">0</span>
</div>
<div class="user-wrapper">
<i class="bi bi-person" onclick="toggleUserMenu()"></i>
<div class="user-dropdown" id="user-dropdown">
<a href="#" onclick="showProfile();closeUserMenu();return false;"><i class="bi bi-person-circle"></i> Profile</a>
<a href="#" onclick="showPesananSaya();closeUserMenu();return false;"><i class="bi bi-box-seam"></i> Pesanan</a>
<hr>
<a href="#" onclick="doLogout();closeUserMenu();return false;"><i class="bi bi-box-arrow-right"></i> Log Out</a>
</div>
</div>
</div>
</div>
</div>
</nav>


<!-- HALAMAN UTAMA -->
<div id="main-page" style="display:none;">

<section id="home" class="hero">
<div class="container">
<img src="https://i.imghippo.com/files/Uo9993KIo.png" alt="Hero Logo" class="hero-logo">
<h1 class="hero-title">Selamat Datang di TumblerKita</h1>
<p class="hero-desc">Tumbler berkualitas yang menjaga minuman Anda tetap sempurna selama berjam-jam. Berkelanjutan, tahan lama, dan dirancang untuk petualangan sehari-hari.</p>
</div>
</section>

<section id="produk" class="produk">
<div class="container-fluid px-4">
<div class="row">
<div class="col-lg-3 mb-4">
<div class="sidebar">
<h4>Kategori</h4>
<a href="#" class="active" onclick="setCategory('semua',this);return false;">Semua Produk</a>
<a href="#" onclick="setCategory('stainless',this);return false;">Tumbler Stainless</a>
<a href="#" onclick="setCategory('plastik',this);return false;">Tumbler Plastik</a>
<a href="#" onclick="setCategory('anak',this);return false;">Tumbler Anak</a>
<a href="#" onclick="setCategory('custome',this);return false;">Custome Tumbler</a>
<a href="#" onclick="setCategory('favorite',this);return false;"><i class="bi bi-heart-fill" style="color:#e74c3c;margin-right:6px;"></i> Tumbler Favorite</a>
</div>
</div>
<div class="col-lg-9">
<h2 class="judul-produk" id="judul-produk">Semua Produk</h2>
<div class="row" id="product-grid"></div>
</div>
</div>
</div>
</section>

<section id="tentang" class="tentang">
<div class="container">
<h2>Kehidrasianmu, Prioritas Kami</h2>
<p>Di TumblerKita, kami percaya bahwa tetap terhidrasi tidak harus mengorbankan gaya atau keberlanjutan. Setiap tumbler dibuat dengan bahan berkualitas dan dirancang untuk menemani setiap aktivitas Anda, dari kopi pagi hingga olahraga malam.</p>
</div>
</section>

<footer class="footer">
<div class="container">
<h2>TumblerKita</h2>
<p class="footer-sub">Tumbler berkualitas untuk kehidupan modern</p>
<div class="row">
<div class="col-md-4 footer-box"><h4>Kontak:</h4><p><i class="bi bi-whatsapp"></i> +62 882 1250 4289</p></div>
<div class="col-md-4 footer-box"><h4>Surel:</h4><p><i class="bi bi-envelope"></i> TumblerKita@gmail.com</p></div>
<div class="col-md-4 footer-box"><h4>Situs Web:</h4><p><i class="bi bi-globe"></i> Tumblerkita.com</p></div>
</div>
<div class="copyright">© 2026 TumblerKita. Hak cipta dilindungi.</div>
</div>
</footer>

</div>


<!-- HALAMAN PROFILE -->
<section id="profile-page" class="profile-page">
<div class="container">
<button class="btn-kembali" onclick="showMain()"><i class="bi bi-arrow-left"></i> Kembali</button>
<h2>Profile Saya</h2>
<div class="row">
<div class="col-lg-7 mb-4">
<div class="profile-card">
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
<div class="profile-avatar" id="profile-avatar">SA</div>
<div>
<button class="btn-edit-profile" id="btn-edit-profile" onclick="editProfile()"><i class="bi bi-pencil"></i> Edit Profile</button>
<button class="btn-save-profile" id="btn-save-profile" onclick="saveProfile()"><i class="bi bi-check2"></i> Simpan</button>
<button class="btn-cancel-profile" id="btn-cancel-profile" onclick="cancelEdit()">Batal</button>
</div>
</div>
<div class="profile-info-row">
<div class="profile-info-label">Nama Lengkap</div>
<div class="profile-info-value"><span id="profile-name-display">Siti Aisyah</span><input type="text" id="profile-name-input" value="Siti Aisyah"></div>
</div>
<div class="profile-info-row">
<div class="profile-info-label">Email</div>
<div class="profile-info-value"><span id="profile-email-display">sitiaisyah@email.com</span><input type="email" id="profile-email-input" value="sitiaisyah@email.com"></div>
</div>
<div class="profile-info-row">
<div class="profile-info-label">No. Telepon</div>
<div class="profile-info-value"><span id="profile-phone-display">0812 - 3456 - 7890</span><input type="text" id="profile-phone-input" value="0812 - 3456 - 7890"></div>
</div>
</div>
</div>
<div class="col-lg-5 mb-4">
<div class="address-card">
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
<h4 style="margin:0;"><i class="bi bi-geo-alt-fill" style="color:#9337ff;margin-right:8px;"></i> Alamat Utama</h4>
<button class="btn-ubah" id="btn-ubah-address" onclick="editAddress()"><i class="bi bi-pencil"></i> Ubah</button>
</div>
<p id="address-display">Jl. Melati No.12, RT03/RW05, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411</p>
<textarea id="address-input" class="form-control" rows="4" style="display:none;">Jl. Melati No.12, RT03/RW05, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411</textarea>
<button class="btn-save-profile" id="btn-save-address" onclick="saveAddress()" style="margin-top:10px;"><i class="bi bi-check2"></i> Simpan Alamat</button>
</div>
</div>
</div>
</div>
</section>


<!-- HALAMAN DETAIL PRODUK -->
<section id="detail-produk" class="detail-produk">
<div class="container">
<button class="btn-kembali" onclick="showMain()"><i class="bi bi-arrow-left"></i> Kembali</button>
<div class="row">
<div class="col-lg-6 mb-4">
<div class="detail-img-box"><img src="https://i.imghippo.com/files/Uo9993KIo.png" id="detail-img" class="detail-img" alt="Produk Detail"></div>
</div>
<div class="col-lg-6">
<h2 id="detail-title" class="detail-title"></h2>
<div class="detail-rating">
<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
<span>4.8 (128 ulasan)</span>
</div>
<h3 id="detail-price" class="detail-price"></h3>
<p class="detail-desc">Tumbler stainless steel premium dengan desain minimalis modern. Dilengkapi dengan teknologi <strong>Vacuum Insulation</strong> yang mampu mengunci suhu minuman tetap panas hingga 12 jam dan dingin hingga 24 jam. Bahan food-grade anti karat dan aman untuk kesehatan.</p>
<div class="detail-variant"><h5>Warna:</h5>
<div class="color-options">
<span class="color-circle active" style="background:#333;"></span>
<span class="color-circle" style="background:#f5f5f5;border:1px solid #ccc;"></span>
<span class="color-circle" style="background:#ff9eb5;"></span>
<span class="color-circle" style="background:#8fd9a8;"></span>
<span class="color-circle" style="background:#999;"></span>
</div></div>
<div class="detail-variant"><h5>Kapasitas:</h5>
<div class="capacity-options">
<button class="btn-cap active">500ml</button>
<button class="btn-cap">750ml</button>
</div></div>
<div class="detail-actions">
<button class="btn-add-cart" id="detail-add-cart"><i class="bi bi-cart3"></i> Tambah ke Keranjang</button>
<button class="btn-save" id="detail-save-btn" onclick="toggleFavorite()"><i class="bi bi-heart"></i> Simpan</button>
</div>
<div class="detail-services">
<div class="service-item"><i class="bi bi-truck"></i><span>Gratis Ongkir</span></div>
<div class="service-item"><i class="bi bi-arrow-repeat"></i><span>7 Hari Pengembalian</span></div>
<div class="service-item"><i class="bi bi-shield-check"></i><span>Garansi Resmi</span></div>
</div>
</div>
</div>
</div>
</section>


<!-- HALAMAN CHECKOUT -->
<section id="checkout-page" class="checkout-page">
<div class="container">
<button class="btn-kembali" onclick="showMain()"><i class="bi bi-arrow-left"></i> Kembali Belanja</button>
<h2><i class="bi bi-cart3"></i> Checkout</h2>
<div class="row">
<div class="col-lg-7 mb-4">
<div class="checkout-card">
<h4 style="font-weight:700;margin-bottom:20px;">Produk yang dibeli</h4>
<div id="checkout-items"></div>
</div>
</div>
<div class="col-lg-5 mb-4">
<div class="checkout-card">
<h4 style="font-weight:700;margin-bottom:20px;">Ringkasan Pesanan</h4>
<div id="checkout-summary"></div>

<!-- KODE PROMO -->
<div class="promo-section">
<div class="promo-toggle" id="promo-toggle" onclick="togglePromo()">
<div class="promo-toggle-left">
<i class="bi bi-tag"></i>
<span>Punya kode promo?</span>
</div>
<div class="promo-toggle-right">
Gunakan Kode <i class="bi bi-chevron-right"></i>
</div>
</div>
<div class="promo-input-area" id="promo-input-area">
<input type="text" id="promo-code-input" placeholder="Masukkan kode promo" style="text-transform:uppercase;">
<button class="btn-apply-promo" onclick="applyPromo()">Gunakan</button>
</div>
<div class="promo-success" id="promo-success"><i class="bi bi-check-circle"></i> <span id="promo-success-text"></span></div>
<div class="promo-error" id="promo-error"><i class="bi bi-x-circle"></i> <span id="promo-error-text"></span></div>
</div>

</div>

<div class="checkout-card">
<h4 style="font-weight:700;margin-bottom:15px;">Metode Pembayaran</h4>
<div class="payment-option selected" onclick="selectPayment(this)">
<input type="radio" name="payment" checked><label>Transfer Bank</label>
</div>
<div class="payment-option" onclick="selectPayment(this)">
<input type="radio" name="payment"><label>E-Wallet (GoPay/OVO/Dana)</label>
</div>
<div class="payment-option" onclick="selectPayment(this)">
<input type="radio" name="payment"><label>COD (Bayar di Tempat)</label>
</div>
</div>

<div class="checkout-card">
<h4 style="font-weight:700;margin-bottom:15px;">Alamat Pengiriman</h4>
<div class="mb-3"><label class="form-label">Nama Lengkap</label><input type="text" class="form-control" id="checkout-name" value="Siti Aisyah"></div>
<div class="mb-3"><label class="form-label">No. Telepon</label><input type="text" class="form-control" id="checkout-phone" value="0812 - 3456 - 7890"></div>
<div class="mb-3"><label class="form-label">Alamat Lengkap</label><textarea class="form-control" rows="3" id="checkout-address">Jl. Melati No.12, RT03/RW05, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411</textarea></div>
</div>

<button class="btn-buat-pesanan" onclick="buatPesanan()">Buat Pesanan</button>
</div>
</div>
</div>
</section>


<!-- HALAMAN PESANAN DIPROSES -->
<section id="pesanan-diproses" class="pesanan-diproses">
<div class="container">
<button class="btn-kembali" onclick="showMain()" style="position:absolute;left:20px;"><i class="bi bi-arrow-left"></i> Kembali</button>
<h2>Pesanan Sedang Diproses</h2>
<p class="subtitle">Terima kasih! Pesanan kamu sedang kami siapkan 🎉</p>
<svg class="process-illustration" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
<rect x="40" y="80" width="120" height="90" rx="10" fill="#f0dfff" stroke="#9337ff" stroke-width="3"/>
<rect x="55" y="60" width="90" height="30" rx="5" fill="#f0dfff" stroke="#9337ff" stroke-width="3"/>
<circle cx="100" cy="125" r="15" fill="none" stroke="#9337ff" stroke-width="3"/>
<path d="M93 125 L100 132 L110 118" fill="none" stroke="#9337ff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="65" cy="50" r="8" fill="#ff9eb5"><animate attributeName="cy" values="50;40;50" dur="2s" repeatCount="indefinite"/></circle>
<circle cx="140" cy="45" r="6" fill="#8fd9a8"><animate attributeName="cy" values="45;35;45" dur="1.8s" repeatCount="indefinite"/></circle>
<circle cx="155" cy="70" r="5" fill="#ffc107"><animate attributeName="cy" values="70;62;70" dur="2.2s" repeatCount="indefinite"/></circle>
</svg>
<div class="progress-track">
<div class="progress-step done"><div class="step-circle"><i class="bi bi-check2"></i></div><div class="step-label">Pesan Dibuat</div><div class="step-time">10:30 AM</div></div>
<div class="progress-line done"></div>
<div class="progress-step done"><div class="step-circle"><i class="bi bi-check2"></i></div><div class="step-label">Diproses</div><div class="step-time">10:32 AM</div></div>
<div class="progress-line"></div>
<div class="progress-step current"><div class="step-circle"><i class="bi bi-box-seam"></i></div><div class="step-label">Dikemas</div><div class="step-time">—</div></div>
<div class="progress-line"></div>
<div class="progress-step"><div class="step-circle"><i class="bi bi-truck"></i></div><div class="step-label">Dikirim</div><div class="step-time">—</div></div>
<div class="progress-line"></div>
<div class="progress-step"><div class="step-circle"><i class="bi bi-check-circle"></i></div><div class="step-label">Selesai</div><div class="step-time">—</div></div>
</div>
<div class="order-info-box">
<p><strong>No. Pesanan:</strong> <span id="order-number">#TK24050123</span></p>
<p><strong>Estimasi Tiba:</strong> Sedang Diproses</p>
</div>
<button class="btn-lihat-pesanan" onclick="showPesananSaya()"><i class="bi bi-box-seam"></i> Lihat Pesanan Saya</button>
</div>
</section>


<!-- HALAMAN PESANAN SAYA -->
<section id="pesanan-saya" class="pesanan-saya">
<div class="container">
<button class="btn-kembali" onclick="showMain()"><i class="bi bi-arrow-left"></i> Kembali</button>
<h2>Pesanan Saya</h2>
<div class="order-tabs">
<button class="order-tab active" onclick="filterOrders('semua',this)">Semua</button>
<button class="order-tab" onclick="filterOrders('diproses',this)">Diproses</button>
<button class="order-tab" onclick="filterOrders('dikemas',this)">Dikemas</button>
<button class="order-tab" onclick="filterOrders('dikirim',this)">Dikirim</button>
<button class="order-tab" onclick="filterOrders('selesai',this)">Selesai</button>
<button class="order-tab" onclick="filterOrders('dibatalkan',this)">Dibatalkan</button>
</div>
<div class="orders-table">
<table>
<thead><tr><th>No. Pesanan</th><th>Tanggal</th><th>Total</th><th>Status</th><th></th></tr></thead>
<tbody id="orders-tbody"></tbody>
</table>
</div>

<!-- BELANJA LAGI -->
<div class="belanja-again">
<div class="belanja-again-left">
<div class="belanja-icon"><i class="bi bi-box2-heart"></i></div>
<div class="belanja-text">
<h4>Belanja Lagi Yuk!</h4>
<p>Temukan berbagi pilihan tumbler menarik lainnya.</p>
</div>
</div>
<button class="btn-belanja" onclick="showMain()">Belanja Sekarang</button>
</div>

</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

// ==================== DATA ====================
var products = [
    { title:"Tumbler Stainless Minimalist", price:"Rp150.000", priceNum:150000, img:"https://i.imghippo.com/files/PE6244MSM.jpg", category:"stainless" },
    { title:"Tumbler Gradient Aesthetic", price:"Rp175.000", priceNum:175000, img:"https://i.imghippo.com/files/na9976vA.jpg", category:"stainless" },
    { title:"Tumbler Sport", price:"Rp120.000", priceNum:120000, img:"https://i.imghippo.com/files/lxbC5733GM.jpg", category:"anak" },
    { title:"Tumbler Children", price:"Rp200.000", priceNum:200000, img:"https://i.imghippo.com/files/DLjf4847FPs.jpg", category:"custome" },
    { title:"Tumbler Travel", price:"Rp135.000", priceNum:135000, img:"https://i.imghippo.com/files/TaUi5567vPw.jpg", category:"plastik" },
    { title:"Tumbler Thermal Simple", price:"Rp185.000", priceNum:185000, img:"https://i.imghippo.com/files/vs1106MhU.jpg", category:"stainless" },
    { title:"Tumbler Lock Premium", price:"Rp160.000", priceNum:160000, img:"https://i.imghippo.com/files/cOf6136LA.jpg", category:"plastik" },
    { title:"Tumbler Portable Ring", price:"Rp250.000", priceNum:250000, img:"https://i.imghippo.com/files/SKtt6693QL.jpg", category:"stainless" }
];

var cart = [];
var favorites = [];
var currentDetailIndex = 0;
var activeCategory = 'semua';
var isLoggedIn = false;
var promoApplied = false;
var promoDiscount = 0;

// ==================== PROMO CODES ====================
var promoCodes = {
    'KELOMPOK2': { discount:20000, label:'Diskon Rp20.000' },
    '50': { discount:50000, label:'Diskon Rp50.000' },
    '10': { discount:10000, label:'Diskon Rp10.000' }
};

var userProfile = {
    name:"Muhammad Dzikrul Al Jabbar",
    email:"nemotoarul1140@email.com",
    phone:"0812 - 3456 - 7890",
    address:"Jl. Raya aja, RT67/RW67, Kec. dimanasaja, Kota jonggol, Jawa Barat 66666"
};

// ==================== LOGIN ====================
function togglePassword() {
    var passInput = document.getElementById('login-password');
    var toggleIcon = document.getElementById('toggle-pass');
    if (passInput.type === 'password') {
        passInput.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
    } else {
        passInput.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
    }
}

function doLogin() {
    var email = document.getElementById('login-email').value;
    var password = document.getElementById('login-password').value;
    var errorEl = document.getElementById('login-error');

    if (!email && !password) {
        isLoggedIn = true;
        errorEl.classList.remove('show');
        document.getElementById('login-page').style.display = 'none';
        document.getElementById('main-navbar').style.display = 'block';
        showMain();
        showToast('Selamat datang, ' + userProfile.name + '! 👋');
        return;
    }

    if (!email) {
        errorEl.classList.add('show');
        document.getElementById('login-error-text').textContent = 'Email tidak boleh kosong!';
        return;
    }

    isLoggedIn = true;
    errorEl.classList.remove('show');
    if (email && email.indexOf('@') > -1) userProfile.email = email;

    document.getElementById('login-page').style.display = 'none';
    document.getElementById('main-navbar').style.display = 'block';
    showMain();
    showToast('Selamat datang, ' + userProfile.name + '! 👋');
}

function doLogout() {
    isLoggedIn = false;
    cart = [];
    favorites = [];
    promoApplied = false;
    promoDiscount = 0;
    updateBadge();

    document.getElementById('login-email').value = '';
    document.getElementById('login-password').value = '';
    document.getElementById('login-error').classList.remove('show');

    // Reset password visibility
    document.getElementById('login-password').type = 'password';
    var toggleIcon = document.getElementById('toggle-pass');
    toggleIcon.classList.remove('bi-eye-slash');
    toggleIcon.classList.add('bi-eye');

    hideAllPages();
    document.getElementById('main-navbar').style.display = 'none';
    document.getElementById('login-page').style.display = 'flex';
    window.scrollTo(0, 0);
    showToast('Berhasil logout! 👋');
}

document.getElementById('login-email').addEventListener('keydown', function(e) { if (e.key === 'Enter') doLogin(); });
document.getElementById('login-password').addEventListener('keydown', function(e) { if (e.key === 'Enter') doLogin(); });

// ==================== RENDER PRODUCT GRID ====================
function renderProductGrid() {
    var grid = document.getElementById('product-grid');
    var judul = document.getElementById('judul-produk');
    var filtered = [];

    if (activeCategory === 'semua') {
        filtered = products.map(function(p, i) { return { product: p, index: i }; });
        judul.textContent = 'Semua Produk';
    } else if (activeCategory === 'favorite') {
        filtered = products.map(function(p, i) { if (favorites.indexOf(i) > -1) return { product: p, index: i }; return null; }).filter(function(x) { return x !== null; });
        judul.textContent = 'Tumbler Favorite';
    } else {
        filtered = products.map(function(p, i) { if (p.category === activeCategory) return { product: p, index: i }; return null; }).filter(function(x) { return x !== null; });
        var catNames = { stainless:'Tumbler Stainless', plastik:'Tumbler Plastik', anak:'Tumbler Olahraga', custome:'Tumbler Anak' };
        judul.textContent = catNames[activeCategory] || 'Produk';
    }

    if (filtered.length === 0) {
        var emptyMsg = activeCategory === 'favorite'
            ? '<h4>Belum ada produk favorit</h4><p>Simpan produk dari halaman detail untuk ditampilkan di sini</p>'
            : '<h4>Tidak ada produk</h4>';
        grid.innerHTML = '<div class="col-12 empty-category"><i class="bi bi-heart"></i>' + emptyMsg + '</div>';
        return;
    }

    grid.innerHTML = filtered.map(function(item) {
        var p = item.product;
        var i = item.index;
        var heartIcon = favorites.indexOf(i) > -1 ? '<i class="bi bi-heart-fill" style="color:#e74c3c;position:absolute;top:15px;right:15px;font-size:22px;"></i>' : '';
        return '<div class="col-lg-3 col-md-6 mb-4">'
            + '<div class="card product-card" onclick="showDetail(' + i + ')">'
            + heartIcon
            + '<img src="' + p.img + '" alt="' + p.title + '">'
            + '<div class="card-body">'
            + '<h5>' + p.title + '</h5>'
            + '<h4>' + p.price + '</h4>'
            + '<button class="btn-cart" onclick="event.stopPropagation();addToCart(' + i + ')">+ Keranjang</button>'
            + '</div></div></div>';
    }).join('');
}

function setCategory(cat, el) {
    activeCategory = cat;
    document.querySelectorAll('.sidebar a').forEach(function(a) { a.classList.remove('active'); });
    el.classList.add('active');
    renderProductGrid();
}

// ==================== FAVORITE ====================
function toggleFavorite() {
    var idx = favorites.indexOf(currentDetailIndex);
    if (idx > -1) { favorites.splice(idx, 1); showToast('Dihapus dari favorit 💔'); }
    else { favorites.push(currentDetailIndex); showToast('Disimpan ke favorit ❤️'); }
    updateSaveButton();
}

function updateSaveButton() {
    var btn = document.getElementById('detail-save-btn');
    if (favorites.indexOf(currentDetailIndex) > -1) {
        btn.innerHTML = '<i class="bi bi-heart-fill"></i> Disimpan';
        btn.classList.add('saved');
    } else {
        btn.innerHTML = '<i class="bi bi-heart"></i> Simpan';
        btn.classList.remove('saved');
    }
}

// ==================== KERANJANG ====================
function addToCart(index) {
    var existing = cart.find(function(c) { return c.id === index; });
    if (existing) { existing.qty++; } else { cart.push({ id: index, qty: 1 }); }
    updateBadge();
    showToast('Ditambahkan ke keranjang! 🛒');
}

function removeFromCart(index) {
    cart = cart.filter(function(c) { return c.id !== index; });
    updateBadge();
    renderCheckout();
}

function changeQty(index, delta) {
    var item = cart.find(function(c) { return c.id === index; });
    if (item) { item.qty += delta; if (item.qty < 1) { removeFromCart(index); return; } }
    renderCheckout();
}

function updateBadge() {
    var badge = document.getElementById('cart-badge');
    var total = cart.reduce(function(s, c) { return s + c.qty; }, 0);
    badge.textContent = total;
    if (total > 0) badge.classList.add('show'); else badge.classList.remove('show');
}

// ==================== NAVIGASI ====================
function hideAllPages() {
    document.getElementById('main-page').style.display = 'none';
    document.getElementById('detail-produk').style.display = 'none';
    document.getElementById('checkout-page').style.display = 'none';
    document.getElementById('pesanan-diproses').style.display = 'none';
    document.getElementById('pesanan-saya').style.display = 'none';
    document.getElementById('profile-page').style.display = 'none';
}

function showMain() { hideAllPages(); document.getElementById('main-page').style.display = 'block'; renderProductGrid(); window.scrollTo(0, 0); }
function showDetail(index) { currentDetailIndex = index; var p = products[index]; document.getElementById('detail-title').innerText = p.title; document.getElementById('detail-price').innerText = p.price; document.getElementById('detail-img').src = p.img; updateSaveButton(); hideAllPages(); document.getElementById('detail-produk').style.display = 'block'; window.scrollTo(0, 0); }
function showCheckout() { hideAllPages(); document.getElementById('checkout-page').style.display = 'block'; renderCheckout(); window.scrollTo(0, 0); }
function showPesananDiproses() { hideAllPages(); document.getElementById('pesanan-diproses').style.display = 'block'; window.scrollTo(0, 0); }
function showPesananSaya() { hideAllPages(); document.getElementById('pesanan-saya').style.display = 'block'; renderOrders(); window.scrollTo(0, 0); }
function showProfile() { hideAllPages(); document.getElementById('profile-page').style.display = 'block'; renderProfile(); window.scrollTo(0, 0); }

// ==================== PROFILE ====================
function renderProfile() {
    document.getElementById('profile-name-display').textContent = userProfile.name;
    document.getElementById('profile-name-input').value = userProfile.name;
    document.getElementById('profile-email-display').textContent = userProfile.email;
    document.getElementById('profile-email-input').value = userProfile.email;
    document.getElementById('profile-phone-display').textContent = userProfile.phone;
    document.getElementById('profile-phone-input').value = userProfile.phone;
    document.getElementById('address-display').textContent = userProfile.address;
    document.getElementById('address-input').value = userProfile.address;
    var names = userProfile.name.split(' ');
    document.getElementById('profile-avatar').textContent = names.map(function(n) { return n.charAt(0); }).join('').substring(0, 2).toUpperCase();
    cancelEdit();
    cancelAddress();
}

function editProfile() {
    document.getElementById('profile-name-display').classList.add('hide'); document.getElementById('profile-name-input').classList.add('show');
    document.getElementById('profile-email-display').classList.add('hide'); document.getElementById('profile-email-input').classList.add('show');
    document.getElementById('profile-phone-display').classList.add('hide'); document.getElementById('profile-phone-input').classList.add('show');
    document.getElementById('btn-edit-profile').style.display = 'none';
    document.getElementById('btn-save-profile').classList.add('show');
    document.getElementById('btn-cancel-profile').classList.add('show');
}

function saveProfile() {
    var n = document.getElementById('profile-name-input').value.trim();
    if (!n) { showToast('Nama tidak boleh kosong!'); return; }
    userProfile.name = n;
    userProfile.email = document.getElementById('profile-email-input').value.trim();
    userProfile.phone = document.getElementById('profile-phone-input').value.trim();
    cancelEdit(); renderProfile();
    showToast('Profile berhasil diperbarui! ✅');
}

function cancelEdit() {
    document.getElementById('profile-name-display').classList.remove('hide'); document.getElementById('profile-name-input').classList.remove('show');
    document.getElementById('profile-email-display').classList.remove('hide'); document.getElementById('profile-email-input').classList.remove('show');
    document.getElementById('profile-phone-display').classList.remove('hide'); document.getElementById('profile-phone-input').classList.remove('show');
    document.getElementById('btn-edit-profile').style.display = 'inline-block';
    document.getElementById('btn-save-profile').classList.remove('show');
    document.getElementById('btn-cancel-profile').classList.remove('show');
}

function editAddress() {
    document.getElementById('address-display').style.display = 'none';
    document.getElementById('address-input').style.display = 'block';
    document.getElementById('btn-save-address').classList.add('show');
}

function saveAddress() {
    var a = document.getElementById('address-input').value.trim();
    if (!a) { showToast('Alamat tidak boleh kosong!'); return; }
    userProfile.address = a;
    cancelAddress(); renderProfile();
    showToast('Alamat berhasil diperbarui! ✅');
}

function cancelAddress() {
    document.getElementById('address-display').style.display = 'block';
    document.getElementById('address-input').style.display = 'none';
    document.getElementById('btn-save-address').classList.remove('show');
}

// ==================== PROMO CODE ====================
function togglePromo() {
    var inputArea = document.getElementById('promo-input-area');
    inputArea.classList.toggle('show');
}

function applyPromo() {
    var code = document.getElementById('promo-code-input').value.trim().toUpperCase();
    var successEl = document.getElementById('promo-success');
    var errorEl = document.getElementById('promo-error');

    successEl.classList.remove('show');
    errorEl.classList.remove('show');

    if (!code) {
        errorEl.classList.add('show');
        document.getElementById('promo-error-text').textContent = 'Masukkan kode promo terlebih dahulu!';
        return;
    }

    if (promoCodes[code]) {
        promoApplied = true;
        promoDiscount = promoCodes[code].discount;
        successEl.classList.add('show');
        document.getElementById('promo-success-text').textContent = promoCodes[code].label + ' berhasil diterapkan!';
        showToast('Kode promo berhasil! 🎉');
        renderCheckout();
    } else {
        errorEl.classList.add('show');
        document.getElementById('promo-error-text').textContent = 'Kode promo tidak valid atau sudah kadaluarsa';
    }
}

// ==================== CHECKOUT ====================
function renderCheckout() {
    var itemsEl = document.getElementById('checkout-items');
    var summaryEl = document.getElementById('checkout-summary');

    document.getElementById('checkout-name').value = userProfile.name;
    document.getElementById('checkout-phone').value = userProfile.phone;
    document.getElementById('checkout-address').value = userProfile.address;

    if (cart.length === 0) {
        itemsEl.innerHTML = '<div class="empty-cart"><i class="bi bi-cart-x"></i><h4>Keranjang Kosong</h4><p>Belum ada produk ditambahkan</p></div>';
        summaryEl.innerHTML = '';
        return;
    }

    var subtotal = 0;
    itemsEl.innerHTML = cart.map(function(c) {
        var p = products[c.id];
        subtotal += p.priceNum * c.qty;
        return '<div class="cart-item">'
            + '<img src="' + p.img + '" alt="' + p.title + '">'
            + '<div class="cart-item-info"><h5>' + p.title + '</h5><p>' + p.price + '</p></div>'
            + '<div class="qty-control">'
            + '<button onclick="changeQty(' + c.id + ',-1)">−</button>'
            + '<span>' + c.qty + '</span>'
            + '<button onclick="changeQty(' + c.id + ',1)">+</button>'
            + '</div>'
            + '<button class="btn-remove" onclick="removeFromCart(' + c.id + ')"><i class="bi bi-trash3"></i></button>'
            + '</div>';
    }).join('');

    var ongkir = 15000;
    var diskonDefault = 0;
    var totalDiskon = diskonDefault + promoDiscount;
    var total = subtotal + ongkir - totalDiskon;

    var promoLine = promoApplied
        ? '<div class="summary-row"><span>Promo</span><span style="color:#e74c3c;">-Rp' + promoDiscount.toLocaleString('id-ID') + '</span></div>'
        : '';

    summaryEl.innerHTML = ''
        + '<div class="summary-row"><span>Subtotal</span><span>Rp' + subtotal.toLocaleString('id-ID') + '</span></div>'
        + '<div class="summary-row"><span>Ongkir</span><span>Rp' + ongkir.toLocaleString('id-ID') + '</span></div>'
        + '<div class="summary-row"><span>Diskon</span><span style="color:#e74c3c;">-Rp' + diskonDefault.toLocaleString('id-ID') + '</span></div>'
        + promoLine
        + '<div class="summary-row total"><span>Total</span><span>Rp' + total.toLocaleString('id-ID') + '</span></div>';
}

function selectPayment(el) {
    document.querySelectorAll('.payment-option').forEach(function(p) { p.classList.remove('selected'); });
    el.classList.add('selected');
    el.querySelector('input').checked = true;
}

// ==================== BUAT PESANAN ====================
var orderCounter = 24050123;
var orders = [
    { id:"#TK24050123", date:"1 Mei 2026", total:"Rp410.000", status:"diproses" },
    { id:"#TK24050098", date:"28 Apr 2026", total:"Rp285.000", status:"dikirim" },
    { id:"#TK24050065", date:"25 Apr 2026", total:"Rp150.000", status:"selesai" },
    { id:"#TK24050032", date:"22 Apr 2026", total:"Rp320.000", status:"dibatalkan" }
];

function buatPesanan() {
    if (cart.length === 0) { showToast('Keranjang masih kosong!'); return; }

    var cName = document.getElementById('checkout-name').value.trim();
    var cPhone = document.getElementById('checkout-phone').value.trim();
    var cAddress = document.getElementById('checkout-address').value.trim();
    if (cName) userProfile.name = cName;
    if (cPhone) userProfile.phone = cPhone;
    if (cAddress) userProfile.address = cAddress;

    orderCounter++;
    var orderId = '#TK' + orderCounter;
    var now = new Date();
    var months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
    var dateStr = now.getDate() + ' ' + months[now.getMonth()] + ' ' + now.getFullYear();

    var subtotal = cart.reduce(function(s, c) { return s + products[c.id].priceNum * c.qty; }, 0);
    var total = subtotal + 15000 - 20000 - promoDiscount;

    orders.unshift({ id:orderId, date:dateStr, total:'Rp' + total.toLocaleString('id-ID'), status:'diproses' });
    document.getElementById('order-number').textContent = orderId;

    cart = [];
    promoApplied = false;
    promoDiscount = 0;
    updateBadge();
    showPesananDiproses();
}

// ==================== PESANAN SAYA ====================
function renderOrders(filter) {
    filter = filter || 'semua';
    var tbody = document.getElementById('orders-tbody');
    var filtered = filter === 'semua' ? orders : orders.filter(function(o) { return o.status === filter; });
    var statusMap = {
        diproses:{ label:'Diproses', cls:'status-diproses' },
        dikemas:{ label:'Dikemas', cls:'status-diproses' },
        dikirim:{ label:'Dikirim', cls:'status-dikirim' },
        selesai:{ label:'Selesai', cls:'status-selesai' },
        dibatalkan:{ label:'Dibatalkan', cls:'status-dibatalkan' }
    };

    if (filtered.length === 0) {
        tbody.innerHTML = '<tr><td colspan="5" style="text-align:center;padding:40px;color:#999;">Tidak ada pesanan</td></tr>';
        return;
    }

    tbody.innerHTML = filtered.map(function(o) {
        var s = statusMap[o.status] || { label:o.status, cls:'' };
        return '<tr>'
            + '<td><strong>' + o.id + '</strong></td>'
            + '<td>' + o.date + '</td>'
            + '<td>' + o.total + '</td>'
            + '<td><span class="status-badge ' + s.cls + '">' + s.label + '</span></td>'
            + '<td><button class="btn-detail-order" onclick="viewOrderDetail(\'' + o.id + '\')">Detail</button></td>'
            + '</tr>';
    }).join('');
}

function viewOrderDetail(orderId) { document.getElementById('order-number').textContent = orderId; showPesananDiproses(); }

function filterOrders(status, btn) {
    document.querySelectorAll('.order-tab').forEach(function(t) { t.classList.remove('active'); });
    btn.classList.add('active');
    renderOrders(status);
}

// ==================== USER MENU ====================
function toggleUserMenu() { document.getElementById('user-dropdown').classList.toggle('show'); }
function closeUserMenu() { document.getElementById('user-dropdown').classList.remove('show'); }
document.addEventListener('click', function(e) {
    var wrapper = document.querySelector('.user-wrapper');
    if (wrapper && !wrapper.contains(e.target)) closeUserMenu();
});

// ==================== TOAST ====================
function showToast(msg) {
    var container = document.getElementById('toast-container');
    var toast = document.createElement('div');
    toast.className = 'custom-toast';
    toast.innerHTML = '<i class="bi bi-check-circle"></i> ' + msg;
    container.appendChild(toast);
    requestAnimationFrame(function() { toast.classList.add('show'); });
    setTimeout(function() { toast.classList.remove('show'); setTimeout(function() { toast.remove(); }, 300); }, 2000);
}

// ==================== DETAIL: TAMBAH KERANJANG ====================
document.getElementById('detail-add-cart').addEventListener('click', function() { addToCart(currentDetailIndex); });

// ==================== INTERAKSI VARIAN ====================
document.querySelectorAll('.color-circle').forEach(function(circle) {
    circle.addEventListener('click', function() {
        document.querySelectorAll('.color-circle').forEach(function(c) { c.classList.remove('active'); });
        this.classList.add('active');
    });
});
document.querySelectorAll('.btn-cap').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.btn-cap').forEach(function(b) { b.classList.remove('active'); });
        this.classList.add('active');
    });
});

// ==================== INIT ====================
document.getElementById('login-page').style.display = 'flex';

</script>

</body>
</html>