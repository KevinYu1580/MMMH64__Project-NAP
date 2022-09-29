<style>
    /* ---- footer-mobile ----*/
.footer-mobile {
    line-height: 1.8;
    color: var(--white);
    font-weight: 300;
    position: relative;
}
.footer-mobile .content {
    width: fit-content;
    margin: auto;
    font-size: 12px;
    padding-top: 98px;
    line-height: 148%;
}
@media screen and (min-width: 768px){
    .footer-mobile .content {
        display: flex;
        align-items: flex-end;
        padding-top: 260px;
        line-height: 240%;
        
    }
}
.footer-mobile .sec1 {
    margin-bottom: 6px;
}
.footer-mobile .sec2 {
    margin-bottom: 8px;
    border-top: 1px solid #ffffff;
    padding-top: 4px;
}

@media screen and (min-width: 768px){
    .footer-mobile .sec2, .footer-mobile .sec1{
    margin: 0 40px 0 0;
    }
}

@media screen and (min-width: 992px){
    .footer-mobile .sec2, .footer-mobile .sec1{
    border-top: none;
    margin: 0 64px 0 0;
    font-size: 16px;
    }
}

.footer-mobile .top_sec {
    width: 100%;
    height: 286px;
    background-image: url(./img/component/footer/footer-mobile.png);
    background-repeat: no-repeat;
    background-size:auto;
    background-position: 10% 18%;
    background-size: cover;
}
@media screen and (min-width: 768px){
    .footer-mobile .top_sec {
        background-image: url(./img/component/footer/footer-pc.png);
        background-position: 10% 0%;
        height: 450px;
    }
}
.footer-mobile .bot_sec {
    background-color:var(--primaryColor_dark);
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.footer-mobile .bot_sec span{
    color:var(--white);
    font-size: 10px;
}
.footer-mobile .logos {
    width: fit-content;
    margin: auto;
}
@media screen and (min-width: 768px){
    .footer-mobile .logos {
        margin:initial;
    }
}



</style>


<div class="footer-mobile">

    <div class="top_sec">
        <div class="content">
            <p class="sec1">
                聯絡資訊 <br>
                地址： 313 新竹縣尖石鄉玉峰段900號<br>
                電話： 03-456 0202<br>
                傳真： 03-456 2266<br>
                客服信箱： service@nap.com.tw<br>
            </p>
            <p class="sec2">
                住宿服務：週日 ～ 週四　|　08:00 ～ 20:00
                <br>
                定期園區活動：週五 ～ 週六　|　08:00 ～ 18:00
            </p>
            <div class="logos">
                <svg style="margin-right:16px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="none">
                    <g clip-path="url(#clip0_178_4963)">
                        <path d="M39.375 20C39.375 9.29688 30.7031 0.625 20 0.625C9.29688 0.625 0.625 9.29688 0.625 20C0.625 29.6703 7.71016 37.6859 16.9727 39.1406V25.6008H12.0508V20H16.9727V15.7312C16.9727 10.8758 19.8633 8.19375 24.2906 8.19375C26.4109 8.19375 28.6281 8.57188 28.6281 8.57188V13.3375H26.1844C23.7781 13.3375 23.0273 14.8312 23.0273 16.3633V20H28.4008L27.5414 25.6008H23.0273V39.1406C32.2898 37.6859 39.375 29.6703 39.375 20Z" fill="#ffffff" />
                    </g>
                    <defs>
                        <clipPath id="clip0_178_4963">
                            <rect width="40" height="40" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <g clip-path="url(#clip0_602_28668)">
                        <path d="M15.05 12.15C13.45 12.15 12.2 13.45 12.2 15C12.2 16.55 13.5 17.85 15.05 17.85C16.65 17.85 17.9 16.55 17.9 15C17.9 13.45 16.65 12.15 15.05 12.15Z" fill="white" />
                        <path d="M18.65 7.59998H11.35C9.29998 7.59998 7.59998 9.29998 7.59998 11.35V18.6C7.59998 20.65 9.29998 22.35 11.35 22.35H18.6C20.65 22.35 22.35 20.65 22.35 18.6V11.35C22.4 9.29998 20.7 7.59998 18.65 7.59998ZM15.05 19.5C12.6 19.5 10.55 17.5 10.55 15C10.55 12.55 12.55 10.5 15.05 10.5C17.5 10.5 19.55 12.5 19.55 15C19.55 17.45 17.55 19.5 15.05 19.5ZM19.8 11.3C19.2 11.3 18.75 10.8 18.75 10.25C18.75 9.64998 19.25 9.19998 19.8 9.19998C20.4 9.19998 20.85 9.69998 20.85 10.25C20.9 10.8 20.4 11.3 19.8 11.3Z" fill="white" />
                        <path d="M15 0C6.7 0 0 6.7 0 15C0 23.3 6.7 30 15 30C23.3 30 30 23.3 30 15C30 6.7 23.3 0 15 0ZM24.1 18.65C24.1 21.65 21.65 24.1 18.65 24.1H11.35C8.35 24.1 5.9 21.65 5.9 18.65V11.35C5.9 8.35 8.35 5.9 11.35 5.9H18.6C21.6 5.9 24.05 8.35 24.05 11.35V18.65H24.1Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_602_28668">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

    </div>
    <div class="bot_sec">
        <span>
            Copyright © 2022 N.A.P. Guide CO.,LTD All rights reserved.
        </span>
    </div>
</div>