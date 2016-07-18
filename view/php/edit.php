  
 <div id="def">
    <div id="popupContact">
    <form method="post" id="fm" enctype="multipart/form-data">
        <img id="close" src="view/css/image/close.png" style="width: 23px" onclick ="div_hide()">
        <h2 id="h2">Edit Contact</h2>
        <input type="hidden" name="edit_id" id="edit_id">
        <hr>
            <label>FirstName :</label>
            <input class="input" id="id_fn" type="text" name="firstname" onkeyup="concat()" placeholder="First Name" required pattern=".{2,}" title="Định dạng lớn hơn 2 ký tự"  />
            
            <br>
            <label>LastName :</label>
            <input class="input" id="id_ln" type="text" name="lastname" onkeyup="concat()" placeholder="Last Name" required pattern=".{2,}" title="Định dạng lớn hơn 2 ký tự"  />
            
            <br>
            <label>FullName :</label>
            <input class="input" id="id_fulln" type="text" name="fullname" placeholder="Full Name" />
             <br>
            <label>Date of birth</label>
            <br>
            <input id="id_date" type="date" class="input" name="bday" ><br>
            <label>Gender :</label><br>
            <input type="radio" name="gender" value="Nữ" checked="checked" ><b id="radio">Female</b>

                           <input type="radio" name="gender" value="Nam" ><b id="radio">Male</b>
             <br>
            <label>Email :</label>
            <input class="input" id="id_email" type="text" name="email" placeholder="abc@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email sai định dạng" />
             <br>
            <label>Avatar :</label><br><br>
            <input class="input" type="file" id="image" name="avatar" accept="image/*"/>
            <br><br>
            <script type="text/javascript">
                function concat(){
                    var a = document.getElementById('id_fn');
                    var b = document.getElementById('id_ln');
                    var c = document.getElementById('id_fulln');
                    c.value = a.value+" "+b.value;
                }
            </script>
        <button class="submit" type="submit" id="submit" name="btn_update">Save</button><br>

    </form>

    </div>
    </div>
