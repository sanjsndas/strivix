<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />
    <title>Strivixpexi : Request accepted!</title>
    <meta property="og:title" content="Strivixpexi : Request accepted!" />
    <meta property="og:image" content="icon.png" />
    
    <meta property="og:description" content="Strivixpexi : Request accepted!" />
    <meta name="description" content="Strivixpexi : Request accepted!" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    

    <style>
      :root{
        --cb-1: #0f2480;
        --cb-2: #f97616;
        --cb-3: #3554d1;
        --cb-4: #7D74B5;
        --cb-5: #f9bc16;
      }

      *{
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body{
        direction: ltr;
        font-family: 'Frank Ruhl Libre', sans-serif !important;
        font-size: clamp(13px, 4vw, 18px);
        margin: 0;
        padding: 0px;
        line-height: 1.5;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      p{
        padding: 0;
        margin: 0;
      }

      p, li{
        padding: 9px 0;
        line-height: 1.5;
      }

      li{
        margin: 0 9px;
      }

      a{
        text-decoration: none;
        color: inherit;
        cursor: pointer;
      }

      img{
        display: block;
        max-width: 100%;
        max-height: 100%;
      }

      ul{
        margin: 0;
        padding: 0;
      }

      .container{
        width: auto;
        padding-right: 21px;
        padding-left: 21px;
        margin-right: auto;
        margin-left: auto;
      }

      @media screen and (min-width: 480px) {
        .container{
        max-width: 450px;
        }
      }
      @media screen and (min-width: 575px){
        .container{
          max-width: 540px;
        }
      }
      @media screen and (min-width: 768px) {
        .container{
        max-width: 730px;
        }
      }
      @media screen and (min-width: 992px) {
        .container{
          max-width: 960px;
        }
      }

      @media screen and (min-width: 1200px){
        .container{
          max-width: 1170px;
          }
      }

      @media (min-width: 1400px){
        .container{
          max-width: 1274px;
        }
      }

      .privacy__block{
        padding: 59px 0;
        overflow: hidden;
        width: 100%;
      }

      .content-privacy{
        opacity: 0.8;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
        text-align: justify;
      }

      .content-privacy a{
        transition: 0.3s ease;
        color: #060606;
      }

      .content-privacy a:hover{
        opacity: 0.5;
      }

      .content-privacy li {
      list-style: circle;
      margin: 0 20px;
      padding:  9px 0;
    }
    .content-privacy p {
      padding:  9px 0;
    }
      .header-background{
        direction: initial;
        position: relative;
        width: 100%;
        background-position: center;
        background-size: cover;
      }

      .header-background::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 70%;
        height: 100%;
        background-image: url(uploads/09-2026/minimalist-fashion-background.webp);
        background-position: center;
        clip-path: polygon(0% 100%, 100% 100%, 100% 0%, 50% 0%);
        background-size: cover;
        filter: brightness(0.9);
        z-index: -1;
        animation: backgroundAnimation 10s infinite ease;
      }

      @keyframes backgroundAnimation {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .header{
        padding: 27px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 42px;
      }

      .logo-header{
        gap: 11px;
        flex-direction: row;
        display: flex;
        align-items: center;
      }

      .logoImg-header img{
        width: 34px;
      }

      .logoTitle-header h2{
        -webkit-text-stroke: 1px var(--cb-4);
        text-transform: uppercase;
        transition: 0.3s ease;
        color: #fff;
        font-size: clamp(14px, 4vw, 18px);
        margin: 0;
      }

      .logoTitle-header h2:hover{
        opacity: 0.5;
      }

      .nav-toggle {
        cursor: pointer;
        width: 27px;
        height: 27px;
        position: relative;
        z-index: 100;
        overflow: hidden;
      }

      .nav-toggle span {
        width: 15px;
        height: 3px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        transition: all 0.5s;
      }

      .nav-toggle span:nth-of-type(2) {
        top: calc(50% - 7px);
      }

      .nav-toggle span:nth-of-type(3) {
        top: calc(50% + 7px);
      }

      .nav-toggle.active span:nth-of-type(1) {
        display: none;
      }

      .nav-toggle.active span:nth-of-type(2) {
        background-color: #fff;
        top: 50%;
        transform: translate(-50%, 0%) rotate(45deg);
      }

      .nav-toggle.active span:nth-of-type(3) {
        background-color: #fff;
        top: 50%;
        transform: translate(-50%, 0%) rotate(-45deg);
      }

      .nav-panel {
        z-index: 99;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.9;
        padding: 15px 42px;
        background:  var(--cb-4);
        transform: translateX(-110%);
        transition: transform 0.5s;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .nav-panel.active {
        transform: translateX(0);
      }

      .nav-panel nav {
        display: flex;
        justify-content: start;
        align-items: center;
        height: 100vh;
      }

      .nav-panel ul {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 11px;
        padding: 0;
      }

      .nav-panel li {
        margin: 0;
        padding: 0;
        list-style-type: none;
      }

      .nav-link {
        transition: 0.3s ease;
        font-weight: bold;
        text-align: center;
        font-size: clamp(18px, 4vw, 22px);
        color: #fff;
      }

      .nav-link:hover {
        opacity: 0.5;
      }

      .header-content{
        padding: 112px 0;
        display: flex;
        flex-direction: column;
        width: 40%;
        align-items: start;
        gap: 27px;
      }

      .header-content h1{
        text-transform: uppercase;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 50px);
        color: var(--cb-4);
      }

      .header-content h1::first-line {
        color: var(--cb-5);
      }

      .header-content p{
        padding: 0;
        font-size: clamp(18px, 4vw, 20px);
        color: #060606;
      }

      .land-button{
        border-radius: 27px;
        border: 1px solid var(--cb-4);
        cursor: pointer;
        font-weight: bold;
        transition: 0.5s ease;
        padding: 11px 15px;
        font-size: clamp(14px, 4vw, 16px);
        text-align: center;
        background-color: transparent;
        color: var(--cb-4);
      }

      .land-button:hover{
        color: #fff;
        background-color: var(--cb-4);
      }

      .about{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        gap: 59px;
        padding: 59px 0;
      }

      .about-img{
        flex: 1;
      }

      .about-img img{
        height: 100%;
        object-fit: cover;
        width: 100%;
      }

      .about-content{
        padding: 42px 0;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 27px;
        justify-content: center;
      }

      .about-content h2{
        line-height: normal;
        border-left: 4px solid var(--cb-5);
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .about-content p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .service{
        display: flex;
        flex-direction: column;
        gap: 59px;
        padding: 59px 0;
      }

      .service-title{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
      }

      .service-title h2{
        line-height: normal;
        border-left: 4px solid var(--cb-5);
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .service-title p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .service-box{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 27px;
      }

      .service-card{
        display: flex;
        flex-direction: column;
        gap: 11px;
      }

      .service-card img{
        width: 100%;
        height: 219px;
        object-fit: cover;
      }

      .service-card h5{
        font-weight: normal;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .our-pricing{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 27px;
        padding: 59px 0;
      }

      .pricing-box{
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        gap: 27px;
      }

      .pricing-card{
        display: flex;
        flex-direction: column;
      }

      .pricing-title{
        background-color: var(--cb-1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 11px;
        padding: 20px;
      }

      .pricing-title span{
        line-height: normal;
        color: #fff;
        font-size: clamp(22px, 4vw, 30px);
      }

      .pricing-title h2{
        font-weight: bold;
        text-transform: uppercase;
        font-size: clamp(18px, 4vw, 22px);
        color: #fff;
      }

      .pricing-content{
        transition: 0.3s ease;
        background-color: var(--cb-5);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
        padding: 27px;
      }

      .pricing-box:hover .pricing-content{
        background-color: #EF2143;
      }

      .pricing-content h5{
        font-weight: bold;
        font-size: clamp(30px, 4vw, 50px);
        color: #fff;
      }

      .pricing-content span{
        border-radius: 27px;
        background-color: #fff;
        height: 6px;
        width: 49px;
      }

      .pricing-list{
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .pricing-item{
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px)
      }

      .pricing-box .land-button{
        margin: 0 auto;
        transition: 0.3s ease !important;
        color: #fff !important;
        background-color: var(--cb-4) !important;
      }

      .pricing-box:hover .land-button{
        border: 1px solid #EF2143 !important;
        background-color: #EF2143 !important;
      }

      .article-content{
        padding: 59px 0;
        display: flex;
        flex-direction: column;
        gap: 59px;
        position: relative;
      }

      .article-content h1{
        direction: initial;
        line-height: normal;
        border-left: 4px solid var(--cb-5);
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .article-section{
        display: flex;
        flex-direction: row;
        gap: 42px;
        position: relative;
      }

      .article-image{
        position: relative;
        flex: 1;
      }

      .article-image img{
        object-fit: contain;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        width: 100%;
        position: sticky;
        top: 59px;
      }

      .article-box{
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 27px;
      }

      .article-text {
        color: #060606;
        font-size: clamp(16px, 4vw, 18px);
      }

      .article-text ul {
        list-style: inside;
      } 
      .article-cost {
        margin-top: 42px;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 9px;
      }

      .article-cost h5{
        color: var(--cb-4);
        font-size: clamp(30px, 4vw, 40px);
        font-weight: bold;
      }

      .our-history{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        gap: 59px;
        padding: 59px 0;
      }

      .history-content{
        padding: 42px 0;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 27px;
        justify-content: center;
      }

      .history-content h2{
        line-height: normal;
        border-left: 4px solid var(--cb-5);
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .history-content p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .history-img-box{
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 27px;
        flex-direction: row-reverse;
      }

      .history-img{
        flex: 1;
        height: 100%;
      }

      .history-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .history-img:last-child{
        height: 90%;
      }

      .stats-lay{
        background-color: var(--cb-5);
      }

      .stats{
        padding: 59px 0;
        display: flex;
        flex-direction: column;
        gap: 59px;
      }

      .stats h2{
        margin: 0 auto;
        text-align: center;
        line-height: normal;
        border-left: 4px solid #fff;
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #fff;
      }

      .stats-box{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 27px;
      }

      .stats-card{
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 11px;
      }

      .stats-card svg{
        width: 58px;
        height: 58px;
        fill: #fff;
      }

      .stats-card h5{
        font-weight: bold;
        color: #fff;
        font-size: clamp(30px, 4vw, 40px);
      }

      .stats-card h1{
        font-weight: normal;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .feedback{
        padding: 59px 0;
        display: flex;
        flex-direction: column;
        gap: 59px;
      }

      .feedback h2{
        margin: 0 auto;
        line-height: normal;
        border-left: 4px solid var(--cb-5);
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .feedback-container {
        border: 1px solid #060606;
        direction: initial;
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
      }

      .feedback-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
      }

      .feedback-card {
        min-width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 15px;
        padding: 27px;
      }

      .feedback-card img {
        width: 155px;
        height: 155px;
        object-fit: cover;
      }

      .feedback-card-box{
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 11px;
      }

      .feedback-card-box h5 {
        display: flex;
        flex-direction: row;
        gap: 9px;
        align-items: center;
      }

      .feedback-card-box h5 span{
        color: #060606;
        font-size: clamp(18px, 4vw, 22px);
      }

      .feedback-card-box h5 hr{
        border: none;
        border-radius: 27px;
        background-color: var(--cb-5);
        height: 6px;
        width: 27px;
      }

      .feedback-card-box p {
        opacity: 0.8;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
        padding: 0;
      }

      .contacts-box{
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
        padding-top: 59px;
      }

      .maps{
        flex: 1;
      }

      .maps iframe{
        height: 100%;
      }

      .fields-form-lay{
        flex: 1;
        background-color: var(--cb-5);
        padding: 27px;
      }

      .fields-form {
        display: flex;
        flex-direction: column;
      }

      .fields-title{
        direction: initial;
        margin-bottom: 42px;
        line-height: normal;
        border-left: 4px solid #fff;
        padding-left: 5px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #fff;
      }

      .input-container {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 11px;
      }

      .input-container label{
        color: #fff;
      }

      .input-container .input-control_column__control, .input-container .textarea-control_column__control, .form button {
        outline: none;
        margin: 9px 0;
      }

      .input-container .input-control_column__control {
        border: none;
        color: #060606;
        background-color: #fff;
        padding: 15px;
        font-size: 14px;
        line-height: 20px;
      }

      .input-container .textarea-control_column__control {
        border: none;
        color: #060606;
        background-color: #fff;
        padding: 15px;
        font-size: 14px;
        line-height: 20px;
        resize: vertical;
        min-height: 42px;
        max-height: 141px;
      }

      .input-container .input-control_column__control::placeholder, .input-container .textarea-control_column__control::placeholder{
        color: #060606;
      }

      .check{
        transition: 0.3s ease;
        color: #fff;
      }

      .check:hover{
        opacity: 0.5;
      }

      .form-check {
        color: #fff;
        display: flex;
        align-items: center;
        gap: 11px;
        justify-content: flex-start;
        padding: 15px 0;
      }

      .form-check .form-check-input{
        margin: 0;
      }

      .fields-form .land-button{
        border: 1px solid var(--cb-1) !important;
        background-color: var(--cb-1) !important;
        color: #fff !important;
      }

      .ui-checkbox {
        --primary-color: #1677ff;
        --secondary-color: #fff;
        --primary-hover-color: #4096ff;
        --checkbox-diameter: 20px;
        --checkbox-border-radius: 5px;
        --checkbox-border-color: #d9d9d9;
        --checkbox-border-width: 1px;
        --checkbox-border-style: solid;
        --checkmark-size: 1.2;
      }

      .ui-checkbox,
      .ui-checkbox *,
      .ui-checkbox *::before,
      .ui-checkbox *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      .ui-checkbox {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: var(--checkbox-diameter);
        height: var(--checkbox-diameter);
        border-radius: var(--checkbox-border-radius);
        background: var(--secondary-color);
        border: var(--checkbox-border-width) var(--checkbox-border-style) var(--checkbox-border-color);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        cursor: pointer;
        position: relative;
      }

      .ui-checkbox::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        border-radius: inherit;
        opacity: 0;
        -webkit-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        -o-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
      }

      .ui-checkbox::before {
        top: 40%;
        left: 50%;
        content: "";
        position: absolute;
        width: 4px;
        height: 7px;
        border-right: 2px solid var(--secondary-color);
        border-bottom: 2px solid var(--secondary-color);
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        transform: translate(-50%, -50%) rotate(45deg) scale(0);
        opacity: 0;
        -webkit-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        -o-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
      }

      .ui-checkbox:hover {
        border-color: var(--primary-color);
      }

      .ui-checkbox:checked {
        background: var(--primary-color);
        border-color: transparent;
      }

      .ui-checkbox:checked::before {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -webkit-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        -o-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
      }

      .ui-checkbox:active:not(:checked)::after {
        -webkit-transition: none;
        -o-transition: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        transition: none;
        opacity: 1;
      }

      .site-footer {
        background-color: var(--cb-5);
        padding: 27px 0;
      }

      .footer-content {
        display: flex;
        flex-direction: column;
        gap: 27px;
      }

      .footer-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        gap: 27px;
      }

      .contact-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 11px;
      }

      .contact-info a {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 11px;
        transition: 0.3s ease;
      }

      .contact-info a h5{
        word-break: break-all;
        flex: 1;
        font-weight: normal;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .contact-info a svg{
        fill: #fff;
        width: 20px;
        height: 20px;
      }

      .contact-info a:hover {
        opacity: 0.5;
      }

      .contact-info ;
        color: #fff;
        opacity: 0.8;
      }

      .contact-info .contact-info__id::before {
        content: "";
        flex: 0 0 20px;
        width: 20px;
      }

      .contact-info .contact-info__id span {
        flex: 1;
        font-size: clamp(14px, 3.6vw, 16px);
        line-height: 1.5;
        word-break: break-word;
      }

      .policy-links {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 11px;
      }

      .policy-links a {
        transition: 0.3s ease;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .policy-links a:hover {
        opacity: 0.5;
      }

      .footer-content p {
        border-top: 0.1px solid #fff;
        padding: 0;
        padding-top: 27px;
        text-align: center;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .flex-col{
        display: flex;
        flex-direction: column-reverse;
      }

      @media (max-width: 1199px) {
        .header-background::before{
          width: 60%;
        }
      }

      @media (max-width: 991px) {
        .header-background::before{
          display: none;
        }

        .header-background{
          background-color: #e9eefc;
        }

        .header-content{
          width: 100%;
        }

        .nav-toggle span{
          background-color: var(--cb-4);
        }

        .service-box{
          grid-template-columns: repeat(2, 1fr);
        }

        .our-pricing{
          grid-template-columns: repeat(1, 1fr);
        }

        .stats-box{
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 767px) {
        .service-box{
          grid-template-columns: repeat(1, 1fr);
        }

        .about{
          flex-direction: column-reverse;
        }

        .about-content{
          padding: 0;
        }

        .about-img img{
          max-height: 50vh;
        }

        .article-section{
          flex-direction: column;
        }

        .article-image img{
          position: relative;
          top: 0;
        }

        .our-history{
          flex-direction: column-reverse;
        }

        .history-content{
          padding: 0;
        }

        .history-img:last-child{
          display: none;
        }

        .history-img img{
          max-height: 50vh;
        }

        .contacts-box{
          flex-direction: column-reverse;
        }

        .fields-form-lay{
          padding: 59px 0;
        }

        .maps iframe{
          height: revert-layer;
        }

        .feedback-card-box h5 hr{
          display: none;
        }

        .feedback-card{
          flex-direction: column;
        }

        .feedback-card img{
          width: 100%;
          height: 219px;
        }

      }

      @media (max-width: 576px){
        .container-comments{
          margin: 0;
        }
        .stats-box{
          grid-template-columns: repeat(1, 1fr);
        }

        .footer-header{
          align-items: stretch;
          flex-direction: column-reverse;
        }

        .feedback-card{
          padding: 0;
        }

        .feedback-container{
          border: none;
        }
      }

      @media (max-width: 400px){
        .container-comments{
          margin: 0;
        }
      }
    
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>

    
  </head>
  <body>
    
    <div class="header-background accountvw--list">
      <header class="header">
        <a class="logo-header" href="./">
          <div class="logoImg-header"><img src="icon.png" alt="" /></div>
          <div class="logoTitle-header"><h2>Strivixpexi</h2></div>
        </a>
        <div class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="nav-panel">
          <nav>
            <ul>
              <li><a class="nav-link" href="./">Home</a></li>
              <li><a class="nav-link" href="./#aboutus">About us</a></li>
              <li><a class="nav-link" href="./#serv">Our Services</a></li>
              
              <li><a class="nav-link" href="./#comm">Comments</a></li>
              
            </ul>
          </nav>
        </div>
      </header>
      <div class="container">
        <div class="header-content">
          <h1>Elevate your everyday wardrobe effortlessly</h1>
          <p>We are attentive, competent, stable...</p>
           
          <a href="./#form-land" class="land-button">Free consultation</a>
          
        </div>
      </div>
    </div>
    <script>
      let navToggle = document.querySelector('.nav-toggle');
      let navPanel = document.querySelector('.nav-panel');
      let navLinks = document.querySelectorAll('.nav-link');
      let body = document.body;

      function closeNavPanel() {
        navToggle.classList.remove('active');
        navPanel.classList.remove('active');
        body.style.overflow = 'auto';
      }

      navToggle.addEventListener('click', function () {
        let isActive = navPanel.classList.toggle('active');
        navToggle.classList.toggle('active', isActive);
        body.style.overflow = isActive ? 'hidden' : 'auto';
      });

      navLinks.forEach(function (link) {
        link.addEventListener('click', closeNavPanel);
      });
    </script>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-paymentcx-grid{
		margin: 0px;
		padding: 0px;
		font-family: 'Josefin Sans', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 343px 0px;
	}
	.bodyClass1-paymentcx-grid{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-paymentcx-grid{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-paymentcx-grid{
		background: #fff;
		color: #111;
	}
	.wrapage-block-paymentcx-grid{
		background-size: 100%;
		width: 100%;
	}
	.box_main-paymentcx-grid{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-paymentcx-grid h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-paymentcx-grid p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-paymentcx-grid{
		text-align: start;
	}
	.mainBlock-paymentcx-grid ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-paymentcx-grid ul>li span{
		font-weight: bold;
	}
	.mainBlock-paymentcx-grid{
		max-width: 852px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-paymentcx-grid .cBlock-paymentcx-grid{
		text-align: start;
	}

	.bodyClass3-paymentcx-grid .mainBlock-paymentcx-grid{
		background: none;
		border-top: 2px dotted #aab9c2;
		border-bottom: 2px dotted #aab9c2;
	}
	.bodyClass2-paymentcx-grid .mainBlock-paymentcx-grid{
		background: #220E24;
		color: #fff !important;
		box-shadow: 0px 0px 10px #220E24;
	}
	.bodyClass2-paymentcx-grid .mainBlock-paymentcx-grid p{
		color: #fff !important;
	}
	.bodyClass1-paymentcx-grid .mainBlock-paymentcx-grid{
		background: #021324;
		color: #ffffff;
		border-left: 3px solid #E79E4F;
	}
	.bodyClass1-paymentcx-grid .mainBlock-paymentcx-grid p{
		color: #ffffff !important;
	}
	.order-paymentcx-grid{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-paymentcx-grid p{
			padding: 0px 15px;
		  }
		  .box_main-paymentcx-grid h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-paymentcx-grid{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-paymentcx-grid{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-paymentcx-grid" id="mainWrapp-paymentcx-grid">


	<div class="wrapage-block-paymentcx-grid">
		<div class="box_main-paymentcx-grid">
			<div class="mainBlock-paymentcx-grid">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-paymentcx-grid">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



    <div class="site-footer checkout__overlayeu">
      <div class="container">
        <div class="footer-content">
          <div class="footer-header">
            <div class="policy-links">
              <a href="Privacy.html">Privacy policy</a>
              <a href="terms-of-service.html">Terms & Conditions</a>
              <a href="legal-disclaimer.html">Disclaimer</a>
                
            </div>
            
          </div>
          <p>&#169; 2026 Strivixpexi</p>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const contactInfo = document.querySelector(".contact-info");
        const policyLinks = document.querySelector(".policy-links");
        
        if (!contactInfo && policyLinks) {
            policyLinks.style.display = "flex";
            policyLinks.style.flexDirection = "row";
            policyLinks.style.flexWrap = "wrap";
        }
    });
    </script>

    

</body>
</html>
