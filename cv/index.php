<?php $pageName = "cv" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link rel="stylesheet" href="style.css">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <title>CV Tanczak</title>
</head>

<body>
  <div class="maincontent-and-margins-wrapper">
    <div class="decoration"></div>
    <div class="maincontent-wrapper">
      <!-- this div is a wrapper for image and it's position is relative so that the div contaner for one and two can be positioned over the image using abslute postion and  bottom left top right 0-->

      <div class="image-and-divcont-wrapper">
         <div class="goback-link-wrapper"> 
               <a class="goback-link" href="../me-connaitre/index.php">Retour</a>
        </div>
 
        <img class="deco-img-desktop" src="images/deco-top-desktop.svg" alt="image decorative">
        <div class="div-container-one-and-two">
          <div class="div-item-one">
            <img class="img-deco" src="images/deco-top.svg" alt="decoration">

            <h1 class="title"> ANASTASIA TANCZAK </h1>
            <h2 class="subtitle-gold">STAGIAIRE EN CONCEPTION ET
              DÉVELOPPEMENT D'APPLICATIONS</h2>
          </div>
          <div class="div-item-two">
            <img class="portrait" src="images/photo-cv.png" alt="a portrait of the author of this resume">
          </div>
        </div>
      </div>
      <!-- div that contains two div-containers for items from 3 to 7 -->
      <div class="div-container-three-to-seven">
        <!-- div that contains item 3 and 4 -->
        <div class="div-container-three-and-four">
          <div class="div-item-three">
            <div class="div-container-for-icons-and-prsinfo">
              <section class="section-pers-info">
                <div class="icon-wrapper">
                  <img class="pers-icons" src="images/date-birth-icon.svg" alt="icon for date of birth">
                </div>
                <p class="p-pers-info">12/01/1985</p>
              </section>
              <section class="section-pers-info">
                <div class="icon-wrapper">
                  <img class="pers-icons" src="images/adress-icon.svg" alt="icon for adress">
                </div>
                <p class="p-pers-info">3 rue des Buvry <br> 80700 Andechy</p>
              </section>
              <section class="section-pers-info">
                <div class="icon-wrapper">
                  <img class="pers-icons" src="images/phone-icon.svg" alt="icon for phone">
                </div>
                <p class="p-pers-info">06 95 56 49 93</p>
              </section>
                <section class="section-pers-info">
                  <div class="icon-wrapper">
                    <img class="pers-icons" src="images/email-icon.svg" alt="icon for email">
                  </div>
                  <p class="p-pers-info email-info">anatkachen@gmail.com</p>
                </section>
                <section class="section-pers-info">
                  <div class="icon-wrapper">
                    <img class="pers-icons" src="images/github-icon.svg" alt="icon for github">
                  </div>
                  <p class="p-pers-info github-info"> <a class="github-link" href="https://github.com/anaviktoriv">anaviktoriv <span class="link-icon-span">&rArr; </span></a></p>
                </section>

            </div>
            <section class="section-competence-dev">
              <h2 class="subtitle-gold">COMPÉTENCES EN DÉVELOPPEMENT</h2>
              <img class="long-line-light" src="images/long-line.svg" alt="decorative line">
              <p class="comp-dev">Maquetter une application</p>
              <img class="short-line" src="images/small-line.svg" alt="decorative line">
              <p class="comp-dev">Programmer des pages web, des application web et des applications
                mobiles
                iOS
              </p>
              <img class="short-line" src="images/small-line.svg" alt="decorative line">
              <p class="comp-dev">Créer un serveur et mettre en place une base de données</p>
            </section>
            <div class="div-item-four">
              <img class="prog-lang-tools" src="images/prog-langs-and-tools.svg" alt="programming languages and their level and tools and their level">
            </div>
          </div>
        </div>
        <!-- div that contains item 5, 6, 7 -->
        <div class="div-container-five-to-seven">
          <div class="div-item-five">
            <img class="languages" src="images/languages.svg" alt="languages and their level">
            <img class="languages-dark" src="images/languages-dark.svg" alt="languages and their level">
          </div>
          <section class="section-six-experience-pro">
            <h2 class="title-lilac">EXP&Eacute;RIENCE PROFESSIONNELLE</h2>
            <img class="long-dark-line" src="images/long-line-dark.svg" alt="long dark decorative line">
            <p class="p-experience-pro"> <span class="date-exp">2018 &agrave; aujourd'hui</span><br>
              Développeuse d'aplications iOS indépendante</p>
            <p class="p-experience-pro"><span class="date-exp">2013-2019</span><br>Professeure d'anglais<br>
              Coll&egrave;ges et lycées de l'académie d'Amiens </p>
            <p class="p-experience-pro"><span class="date-exp">2011-2012</span><br>École maternelle, Kiev
              (Ukraine)</p>
            <p class="p-experience-pro"><span class="date-exp">2008-2012</span><br>Professeure de langues
              &agrave; domicile <br>Anglais, allemand, russe </p>
            <p class="p-experience-pro"><span class="date-exp">2010-2012</span><br>Traductrice
              indépendante</p>
            <p class="p-experience-pro"><span class="date-exp">2005-2007</span><br>Secrétaire <br>Groupe
              de sociétés Yaroslavna, Kiev (Ukraine) </p>
          </section>
          <section class="section-seven-diplomas">
            <h2 class="title-lilac">FORMATION</h2>
            <img class="long-dark-line" src="images/long-line-dark.svg" alt="long dark decorative line">
            <p class="p-experience-pro"> <span class="date-exp">2020</span><br>Concepteur développeur
              d'application, <br>AFPA d'Amiens </p>
            <p class="p-experience-pro"><span class="date-exp">2015</span><br>Licence d'Anglais(LLCER), UPJV
              d'Amiens</p>
            <p class="p-experience-pro"><span class="date-exp">2011</span><br>Licence en Langues
              étrangères : anglais, allemand, <br>Institut des lettres, Kiev (Ukraine) </p>
          </section>
          <img class="deco-low" src="images/deco-low-mob.svg" alt="decorative image">
        </div>
      </div>
    </div>
</body>

</html>
