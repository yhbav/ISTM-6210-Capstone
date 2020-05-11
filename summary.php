<?php include_once "header.inc.php";

$sql = "Select * from user_dim where UserName ='".$_SESSION['user']."'";

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       // output data of each row
       while($row = mysqli_fetch_assoc($result)) {
           $userEmail = $row["UserEmail"];
           $mainGame = $row["UserMainGame"];}
   } else {
       echo "There is nothing to loan at the moment";
   }

   mysqli_close($conn);
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Welcome home, <?php echo $_SESSION['user'];?>!</h2>
        <ol>
          <li><a href="account-info.php">Account Information</a></li>
          <li>My Subscriptions
        </li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="coaches" class="team section-bg">
    <div class="container">

      <div class="row">

        <?php include_once "sidebar.inc.php" ?>

        <section class="section-body">

            <div class="section-body-content">

              <div class="wallet-balance-wrapper">

                <h3 class="wallet-balance-header ng-scope" translate="gamer_dashboard.wallet.current_balance">Current Balance</h3>
                <div class="wallet-balance-amount-wrapper">

                  <div class="wallet-balance-amount">

                      <!-- ngIf: !vm.isStoreValueAvailable -->
                      <!-- ngIf: !vm.isStoreValueAvailable -->
                      <!-- ngIf: vm.isStoreValueAvailable --><span class="wallet-balance-amount-text ng-binding ng-scope" ng-if="vm.isStoreValueAvailable">
                        $0.00
                      </span><!-- end ngIf: vm.isStoreValueAvailable -->
                  </div>
                </div>

              </div>


            </div>
          </section>
        </div>
      </div>
    </section>
<style>
.dashboard-content .section-body {
    position: relative;
    display: block;
}
.dashboard-content .section-body, .dashboard-content .section-header {
    min-width: 0;
    margin: 0 auto;
}
.section-body-block {
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
}
.dashboard-user-table-wrapper {
    padding: 15px;
    border: 1px solid #ECECED;
    margin-bottom: 10px;
}
.dashboard-user-table-wrapper .dashboard-user-table td.other-user-picture {
    width: 10%;
    max-width: 10%;
    text-align: center;
}
.dashboard-user-table-wrapper .dashboard-user-table td.other-user-picture img {
    display: block;
    width: 100%;
    height: auto;
}
.dashboard-user-table-wrapper .dashboard-user-table {
    width: 100%;
}
.table {
    border-collapse: collapse;
    border-spacing: 0;
}
.section-body {
    background-color: #FAFAFB;
    max-width: 1080px;
    min-width: 310px;
    margin: 0 auto;
    border: 1px solid #ECECED;
}
.wallet-balance-wrapper .wallet-balance-header {
    font-size: 18px;
    line-height: 30px;
    font-weight: 500;

    border-bottom: none;
    padding: 5px 10px;
    -webkit-font-smoothing: antialiased;
    text-align: center;
}

.wallet-balance-amount{
-webkit-font-smoothing: antialiased;
cursor: default;
font-size: 50px;
line-height: 30px;
font-weight: 500;
color: #4A4A4F;
font-family: 'Avenir', sans-serif;
-webkit-box-direction: normal;
box-sizing: inherit;
padding: 30px 0;
text-align: center;
}
</style>

</main><!-- End #main -->

<?php include_once "footer.inc.php" ?>
