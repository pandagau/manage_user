<div id="abc">
    <div id="popupContact">
        
        <form method="post" id="fm" enctype="multipart/form-data">
        <img id="close" src="view/css/image/close.png" style="width: 23px" onclick ="div_hide()">
        <h2 id="h2">Add Contact</h2>
        <input type="hidden" name="record_id" id="record_id">
        <hr>
            <label>FirstName :</label>
            <input class="input" id="an" type="text" name="first_name"  placeholder="First Name" required pattern=".{2,}" title="Định dạng lớn hơn 2 ký tự"  onkeyup="concat1()" />
            <br>
            
            <br>
            <label>LastName :</label>
            <input class="input" id="bn" type="text" name="last_name"  placeholder="Last Name" required pattern=".{2,}" title="Định dạng lớn hơn 2 ký tự"  onkeyup="concat1()" />
            <br>
            
            <br>
            <label>FullName :</label>
            <input class="input" id="cn" type="text" name="full_name" placeholder="Full Name" />
             <br>
            <label>Date of birth</label>
            <br>
            <input id="id_date" type="date" class="input" name="bday" required><br>
            <label>Gender :</label><br>
            <input type="radio" name="gender" value="Nữ" checked="checked" ><b id="radio">Female</b>

                           <input type="radio" name="gender" value="Nam" ><b id="radio">Male</b>
             <br>
             <br>
            <label>Email :</label>
            <input class="input" type="text" name="email" placeholder="abc@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email sai định dạng" />
             <br>
             <br>
            <label>Avatar :</label><br><br>
            <input class="input" type="file" id="image" name="avatar" accept="image/*" required />
            <br><br>
            <script type="text/javascript">
                function concat1(){
                    var a = document.getElementById('an');
                    var b = document.getElementById('bn');
                    var c = document.getElementById('cn');
                    c.value = a.value+" "+b.value;
                }
                function fireEvent(element,event) {
                   if (document.createEvent) {
                        var evt = document.createEvent("HTMLEvents");
                        evt.initEvent(event, true, true ); // event type,bubbling,cancelable
                        return !element.dispatchEvent(evt);
                   } else {
                        var evt = document.createEventObject();
                        return element.fireEvent('on'+event,evt)
                   }
                }
            </script>
        <button class="submit" type="submit" id="submit" name="btn_save">Save</button><br>

    </form>
    </div>
</div>