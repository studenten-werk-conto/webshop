# Basis webshop voor lessen webshop bouwen

## Starten van applicatie

In de **database** map staan een __webshop.sql__

Zorg dat je lokaal dit bestand in een database **webshop** hebt geimporteerd.

## Mappenstructuur

- ***admin*** 
    - Is het mapje waar het CMS (Content Management System) of Admin panel komt van de webshop.
- ***assets*** 
    - Hierin staan de css, js en images.
    - Ook staan hier de upload images die geupload worden vanuit het CMS
- ***core***
    - In dit mapje staat de database connectie.
    - De header en de footer van de HTML voorkant.
    - **admin/core** bevat nog een checklogin function file. 
- ***functions***
    - Hier komen de _functions_ van de webshop in te staan. Denk hierbij aan het ophalen van producten of het plaatsen van een bestelling.

 ## Code conventions
Link notion: https://www.notion.so/Code-afspraken-cb7f9788b9ae46dfa782545ec3aec572
<style>... .prod
  uct_card{.    he
0  ight: 300px;.   
   width: 10%; . }
  . .product_card 
00000050:  69  6d  67  7b  0a  20  20  20  20  20  68  65  69  67  68  74  img{.     height
00000060:  3a  20  61  74  74  72  28  70  72  6f  64  75  63  74  5f  63  : attr(product_c
00000070:  61  72  64  2c  20  68  65  69  67  68  74  29  3b  20  0a  20  ard, height); . 
00000080:  20  20  20  7d  0a  3c  2f  73  74  79  6c  65  3e  0a  3c  64     }.</style>.<d
00000090:  69  76  20  63  6c  61  73  73  3d  22  70  72  6f  64  75  63  iv class="produc
000000a0:  74  5f  63  61  72  64  22  3e  0a  3c  69  6d  67  20  73  72  t_card">.<img sr
000000b0:  63  3d  22  68  74  74  70  73  3a  2f  2f  69  2e  72  65  64  c="https://i.red
000000c0:  64  2e  69  74  2f  79  77  31  38  76  6f  77  6b  66  75  72  d.it/yw18vowkfur
000000d0:  36  31  2e  6a  70  67  22  20  61  6c  74  3d  22  70  72  6f  61.jpg" alt="pro
000000e0:  64  75  63  74  20  70  68  6f  74  6f  22  3e  0a  3c  2f  64  duct photo">.</d
000000f0:  69  76  3e                                                      iv>


