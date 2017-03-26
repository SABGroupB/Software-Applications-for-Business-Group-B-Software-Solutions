<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';
 ?>

   <div class="page-header white padding-vertical x2 black-text">
     <div class="container">
       <h2 class="margin-none big-title">Contact</h2>
     </div>
   </div>

   <div class="white padding-vertical x4">

     <div class="container">
     <div class="grid">
       <div class="grid__col grid__col--6-of-12">
           <table class="contact-details">
             <tr>
               <th class="primary-color-text">Email</th>
               <td>info@mctv.ie</td>
             </tr>
             <tr>
               <th class="primary-color-text">Phone</th>
               <td>+353 876 737 26</td>
             </tr>
             <tr>
               <th class="primary-color-text">Address</th>
               <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit<td>
               </tr>
             </table>

       </div>
       <div class="grid__col grid__col--6-of-12">
         <form class="form"
               action="https://formspree.io/michaelcooneymctv@outlook.com"
               method="POST">
           <div class="form__field">
             <input class="form__input" type="text" name="first_name" value="" placeholder="First Name">
           </div>
           <div class="form__field">

             <input class="form__input" type="text" name="last_name" value="" placeholder="Last Name">
           </div>
           <div class="form__field">
             <input type="email" class="form__input" name="_replyto" value="" placeholder="Email Name">
           </div>
           <div class="form__field">
             <textarea class="form__textarea"  placeholder="Leave a message" name="name" rows="8" cols="80"></textarea>
           </div>
           <div class="form__field">
             <input class="btn-primary" type="submit" value="Send Message">
           </div>
         </form>
       </div>
     </div>
   </div>

   </div>

   <div class="black">
     <div class="container">

     </div>
   </div>
  </body>
</html>
