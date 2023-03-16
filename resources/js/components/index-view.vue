<template>
    <div class="wrapper">
        <div class="header" id="header">
            <div class="intro-container">
                <div class="intro-text">
                    <div class="intro-text-content">
                        <h1 class="intro-object-description">MONTATORI DE MOBILĂ</h1>
                        <h2 class="intro-contact">Contactează-ne: <h3>+373 67626697</h3></h2>
                        <h2 class="intro-description">Disponibili în orașul Chișinău</h2>
                    </div>
                    <div class="intro-btn">    
                        <button class="btn" id="solicita-oferta" @click="scrollToOffer()">SOLICITĂ UN MONTAJ DE MOBILĂ <i class="fa-solid fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="main"> 
            <div class="main-container">
                <div class="main-content-img">
                    <img class="main-img" src="https://b-online.ru/wp-content/uploads/2021/01/223.jpg" alt="" />
                </div>
                <div class="main-content-text">
                    <div class="content-text">
                        <h1 className="content-text-title">SUNTEM AICI SĂ VĂ AJUTĂM</h1>
                        <p className="content-text-content1">
                            Suntem o echipă de montatori cu experientă în montarea oricărui tip de mobilier,
                             gata de a veni în orice parte a orașului Chișinău pentru a îndeplini cerințele dumneavoastră. 
                        </p>
                        <button class="btn" id="solicita-oferta" @click="scrollToOffer()">SOLICITĂ UN MONTAJ DE MOBILĂ <i class="fa-solid fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>

            <div class="services-container">
                <h1 class="services-title" id="services">MONTĂM ORICE TIP DE MOBILĂ ȘI CORP DE ILUMINAT:</h1>
                <div class="services">
                    <div class="service">
                        <span class="icon-bed icon"></span>
                        <h2 class="service-title">Mobilă de dormitor</h2>
                        <p class="service-enum">șifoniere, paturi matrimoniale, canapele, paturi single, birou, scaune de masă sau birou, dressing-uri, noptiere</p>
                    </div>
                    <div class="service">
                        <span class="icon-dining-room-furniture icon"></span>
                        <h2 class="service-title">Mobilă de sufragerie</h2>
                        <p class="service-enum">canapele, mese, scaune, dulapuri suspendate, fotolii de orice tip, candelabre</p>
                    </div>
                    <div class="service">
                        <span class="icon-kitchen-cabinets icon"></span>
                        <h2 class="service-title">Mobilă de bucătărie</h2>
                        <p class="service-enum">blat de bucatarie, dulapuri suspendate, instalare chiuvetă, montare cuptor și aragaz, poziționare frigider, mese de bucătărie, colțar, scaune</p>
                    </div>
                    <div class="service">
                        <span class="icon-hanger icon"></span>
                        <h2 class="service-title">Mobilă de hol</h2>
                        <p class="service-enum">cuiere de orice tip, dulap pentru pantofi, etc.</p>
                    </div>
                    <div class="service">
                        <span class="icon-sink-bathroom icon"></span>
                        <h2 class="service-title">Mobilă de baie</h2>
                        <p class="service-enum">dulapuri, toaletă, chiuvetă, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
        },
        methods: {
            scrollToOffer() {
                document.getElementById('form').scrollIntoView();
            }
        }
    }
</script>
