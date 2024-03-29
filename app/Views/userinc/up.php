<div class="fixed-button">
    <button class="btn btn-primary" id="openMessageModal">
        <i class="fas fa-envelope"></i> <!-- Font Awesome message icon -->
        <span class="badge bg-danger"></span> <!-- Add the span element with the number 4 -->
    </button>
</div>

<div id="messageModal" class="message-modal col-md-3">
    <div class="box box-succsses direct-chat direct-chat-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chat Messages</h3>
            <?= $this-> include('/userinc/top')?>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html   notification/profile-->

    <?= $this-> include('/userinc/navnotification')?>

    <?= $this-> include('/userinc/Chat')?>

    <?= $this-> include('/userinc/side')?>



         <!-- top navbar ends -->



         <!-- side navbar start -->
    

         <?= $this-> include('/userinc/nav')?>





         <!-- side navbar ends -->

              
         <?= $this-> include('/userinc/todolist')?>
         
  <div class="main-panel">
  <div class="content-wrapper">
  <h4 class="card-title">Report</h4>
  <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Chart for report count by location -->
              
            <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-yellow"
                    data-original-title="3 New Messages">20</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove" onclick="closeMessageModal()">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="direct-chat-messages">
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Timona Siera</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div>
                    <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png"
                        alt="message user image">
                    <div class="direct-chat-text">
                        For what reason would it be advisable for me to think about business
                        content?
                    </div>
                </div>
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div>
                    <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png"
                        alt="message user image">
                    <div class="direct-chat-text">
                        Thank you for your believe in our supports
                    </div>
                </div>

                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Timona Siera</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                    </div>
                    <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png"
                        alt="message user image">
                    <div class="direct-chat-text">
                        For what reason would it be advisable for me to think about business
                        content?
                    </div>
                </div>
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                    </div>
                    <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png"
                        alt="message user image">
                    <div class="direct-chat-text">
                        I would love to.
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                    </span>
                </div>
            </form>
        </div>

    </div>
</div>