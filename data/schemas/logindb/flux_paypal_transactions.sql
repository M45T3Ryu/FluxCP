CREATE TABLE IF NOT EXISTS flux_paypal_transactions (
  id               INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  account_id       INT(11) UNSIGNED NOT NULL DEFAULT '0',
  server_name      VARCHAR(255),
  receiver_email   VARCHAR(60),
  item_name        VARCHAR(100),
  item_number      VARCHAR(10),
  quantity         VARCHAR(6),
  payment_status   VARCHAR(10),
  pending_reason   VARCHAR(10),
  payment_date     VARCHAR(20),
  mc_gross         VARCHAR(20),
  mc_fee           VARCHAR(20),
  tax              VARCHAR(20),
  mc_currency      VARCHAR(3),
  txn_id           VARCHAR(20),
  txn_type         VARCHAR(10),
  first_name       VARCHAR(30),
  last_name        VARCHAR(40),
  address_street   VARCHAR(50),
  address_city     VARCHAR(30),
  address_state    VARCHAR(30),
  address_zip      VARCHAR(20),
  address_country  VARCHAR(30),
  address_status   VARCHAR(10),
  payer_email      VARCHAR(60),
  payer_status     VARCHAR(10),
  payment_type     VARCHAR(10),
  notify_version   VARCHAR(10),
  verify_sign      VARCHAR(255),
  referrer_id      VARCHAR(10)
) ENGINE = MYISAM COMMENT = 'All verified PayPal transactions that go through the IPN handler.';