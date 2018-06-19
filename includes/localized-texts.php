<?php
/**
 * Created by PhpStorm.
 * User: nahuel
 * Date: 05/05/2018
 * Time: 11:25
 */

$texts = array(
    'strings' => array(
        'requiredField'         =>  __( 'Required field', 'direct-stripe' ),
        'yes'                   =>  __( 'Yes', 'direct-stripe' ),
        'no'                    =>  __( 'No', 'direct-stripe' ),
        'settingSaved'          =>  __( 'Saved', 'direct-stripe' ),
        'settingError'          =>  __( 'Error', 'direct-stripe' ),
        'textSelect'            =>  __( 'Select', 'direct-stripe' ),
        'general'               =>  __( 'Global Settings', 'direct-stripe' ),
        'styles'                =>  __( 'Styles Settings', 'direct-stripe' ),
        'emails'                =>  __( 'Emails Settings', 'direct-stripe' ),
        'buttons'               =>  __( 'Buttons Settings', 'direct-stripe' ),
        'setApiKeys'            =>  __( 'Set API keys', 'direct-stripe' ),
        'livePKey'              =>  __( 'Live Publishable API key', 'direct-stripe' ),
        'liveSKey'              =>  __( 'Live Secret API key', 'direct-stripe' ),
        'useTestKeys'           =>  __( 'Use test keys / mode', 'direct-stripe' ),
        'testLink'              =>  __( 'Enable test mode and use test card numbers'),
        'testKeyNumber'         =>  __( 'Ex: Visa card test number 4242 4242 4242 4242', 'direct-stripe' ),
        'testKeyCvv'            =>  __( 'With any exp date and 3 CVV numbers', 'direct-stripe' ),
        'testPKey'              =>  __( 'Test Publishable API key', 'direct-stripe' ),
        'testSKey'              =>  __( 'Test Secret API key', 'direct-stripe' ),
        'currency'              =>  __( 'Currency', 'direct-stripe' ),
        'bubbleMessages'        =>  __( 'Success and error messages', 'direct-stripe' ),
        'successBubble'         =>  __( 'Success message', 'direct-stripe' ),
        'editSuccessBubble'     =>  __( 'Successful transaction', 'direct-stripe' ),
        'errorBubble'           =>  __( 'Error message', 'direct-stripe' ),
        'editErrorBubble'       =>  __( 'Something went wrong...', 'direct-stripe' ),
        'redirection'           =>  __( 'Redirect users to success or error pages when transaction completed', 'direct-stripe' ),
        'useRedirectionPages'   =>  __( 'Use redirections instead of Ajax response', 'direct-stripe' ),
        'successPage'           =>  __( 'Success page', 'direct-stripe' ),
        'errorPage'             =>  __( 'Error page', 'direct-stripe' ),
        'modalFormLogo'         =>  __( 'Modal form logo / image', 'direct-stripe' ),
        'selectImage'           =>  __( 'Select image', 'direct-stripe' ),
        'currentImage'          =>  __( 'Current logo / image', 'direct-stripe' ),
        'wpMediaTitle'          =>  __( 'Select or Upload Media Of Your Chosen Persuasion', 'direct-stripe' ),
        'wpMediaButton'         =>  __( 'Use this media', 'direct-stripe' ),
        'removeImage'           =>  __( 'Remove Image', 'direct-stripe' ),
        'altAttachment'         =>  __( 'Image for Modal Form', 'direct-stripe' ),
        'billingInformation'    =>  __( 'Billing information', 'direct-stripe' ),
        'billingAddress'        =>  __( 'Ask for address in modal Form', 'direct-stripe' ),
        'shippingAddress'       =>  __( 'Add shipping address option (billing address is always asked for when the shipping address option is enabled)', 'direct-stripe' ),
        'rememberMe'            =>  __( 'Allow remember me Stripe option in modal Form', 'direct-stripe' ),
        'customButtonStyles'    =>  __( 'Custom button styles', 'direct-stripe' ),
        'stylesRadioNo'         =>  __( 'Do not set styles', 'direct-stripe' ),
        'styleRadioStripe'      =>  __( 'Use default stripe styles', 'direct-stripe' ),
        'styleRadioDS'          =>  __( 'Use styles set below', 'direct-stripe' ),
        'chooseButtonStyles'    =>  __( 'Choose button styles', 'direct-stripe' ),
        'mainColor'             =>  __( 'Main Color', 'direct-stripe' ),
        'borderRadius'          =>  __( 'Border radius', 'direct-stripe' ),
        'termsAndConditions'    =>  __( 'Terms and conditions', 'direct-stripe' ),
        'useTC'                 =>  __( 'Use Terms and Conditions checkbox', 'direct-stripe' ),
        'selectTCPage'          =>  __( 'Select T&C page', 'direct-stripe' ),
        'tcText'                =>  __( 'Terms and conditions text', 'direct-stripe' ),
        'tcTextLinked'          =>  __( 'Terms and conditions link text', 'direct-stripe' ),
        'tcPage'                =>  __( 'Terms and conditions page', 'direct-stripe' ),
        'successAdminEmailTitle'=>  __( 'Automated emails to admin after successful transactions', 'direct-stripe' ),
        'checkSAE'              =>  __( 'Send emails to admin after successful transaction', 'direct-stripe' ),
        'adminSEmailSubject'    =>  __( 'Admin email subject', 'direct-stripe' ),
        'adminSEmailContent'    =>  __( 'Admin email content', 'direct-stripe' ),
        'successUserEmailTitle' =>  __( 'Automated emails to Stripe user after successful transactions', 'direct-stripe' ),
        'checkSUE'              =>  __( 'Send emails to Stripe user after successful transaction', 'direct-stripe' ),
        'userSEmailSubject'     =>  __( 'User email subject', 'direct-stripe' ),
        'userSEmailContent'     =>  __( 'User email content', 'direct-stripe' ),
        'errorAdminEmailTitle'  =>  __( 'Automated emails to admin after failed transaction', 'direct-stripe' ),
        'checkEAE'              =>  __( 'Send emails to admin after failed transaction', 'direct-stripe' ),
        'adminEEmailSubject'    =>  __( 'Admin error email subject', 'direct-stripe' ),
        'adminEEmailContent'    =>  __( 'Admin error email content', 'direct-stripe' ),
        'errorUserEmailTitle'   =>  __( 'Automated emails to Stripe user after failed transaction', 'direct-stripe' ),
        'checkEUE'              =>  __( 'Send emails to Stripe user after failed transaction', 'direct-stripe' ),
        'userEEmailSubject'     =>  __( 'User error email subject', 'direct-stripe' ),
        'userEEmailContent'     =>  __( 'User error email content', 'direct-stripe' ),
        'buttonsSettings'       =>  __( 'Manage Stripe buttons', 'direct-stripe' ),
        'createButtonsTitle'    =>  __( 'Write a name and click create Button', 'direct-stripe' ),
        'createButtons'         =>  __( 'Create button', 'direct-stripe' ),
        'editButtonTitle'       =>  __( 'Edit Buttons', 'direct-stripe' ),
        'buttonSelected'        =>  __( 'Selected button', 'direct-stripe' ),
        'selectButton'          =>  __( 'Select Button', 'direct-stripe' ),
        'deleteButton'          =>  __( 'Delete Button', 'direct-stripe' ),
        'defDeleteButton'       =>  __( 'This will permantly remove this Button', 'direct-stripe' ),
        'buttonMainOptions'     =>  __( 'Main button Options', 'direct-stripe' ),
        'buttonMainDescription' =>  __( 'L\'argument "type" du bouton est requis, l\'argument "amount" est requis pour les "type" payments et subscription.', 'direct-stripe' ),
        'selectButtonType'      =>  __( 'Select Button Type', 'direct-stripe' ),
        'currentlySelected'     =>  __( 'Currently selected', 'direct-stripe' ),
        'currentlySelectedNo'   =>  __( 'No Button Selected', 'direct-stripe' ),
        'typeLabel'             =>  __( 'Type', 'direct-stripe' ),
        'valueIDLabel'          =>  __( 'Unique ID', 'direct-stripe' ),
        'valueAmountLabel'      =>  __( 'Amount', 'direct-stripe' ),
        'valueSubscriptionLabel'=>  __( 'Plan ID', 'direct-stripe' ),
        'valueDonationLabel'    =>  __( 'Donation amount is set by user', 'direct-stripe' ),
        'valueAmountHint'       =>  __( 'For subscriptions, enter the pricing plan ID of a product, created in Stripe admin panel.', 'direct-stripe' ),
        'valueCSSIDLabel'       =>  __( 'Add a CSS ID to the button', 'direct-stripe' ),
        'overrideGeneralOptions'=>  __( 'Override general Options','direct-stripe' ),
        'buttonSettingsOverride'=>  __( 'Set a shop name and product/service description. The label is the text of the button, the panel label is the text of the text of the modal form button', 'direct-stripe'),
        'buttonName'            =>  __( 'Name', 'direct-stripe' ),
        'buttonLabel'           =>  __( 'Label', 'direct-stripe' ),
        'buttonPanelLabel'      =>  __( 'Panel Label', 'direct-stripe' ),
        'buttonDescription'     =>  __( 'Description', 'direct-stripe' ),
        'buttonCurrency'        =>  __( 'Currency', 'direct-stripe' ),
        'hintButtonCurrency'    =>  __( 'Override the currency set under Direct Stripe -> setup , and use currency per button.', 'direct-stripe' ),
        'tc'                    =>  __( 'T&C', 'direct-stripe' ),
        'hintButtonTC'          =>  __( 'Ask for terms and conditions acceptation. T&C Text and link is editable under styles tab in Direct Stripe options page.', 'direct-stripe' ),
        'billing'               =>  __( 'Billing', 'direct-stripe' ),
        'hintButtonBilling'     =>  __( 'Ask for further billing information.', 'direct-stripe' ),
        'shipping'              =>  __( 'Shipping', 'direct-stripe' ),
        'hintButtonShipping'    =>  __( 'Ask for Shipping Data ( It always enable billing data fields)', 'direct-stripe' ),
        'rm'                    =>  __( 'Remember me', 'direct-stripe' ),
        'hintButtonRm'          =>  __( 'Allow Stripe to ask user if he wants his email address to be remembered', 'direct-stripe' ),
        'overSubscriptionSet'   =>  __( 'Options for subscriptions','direct-stripe' ),
        'buttonCoupon'          =>  __( 'Coupon','direct-stripe' ),
        'hintButtonCoupon'      =>  __( 'Coupon are to be previously created in Stripe admin panel and allows you to create a discount/promotion, enter the coupon ID.', 'direct-stripe' ),
        'SetupFee'              =>  __( 'Setup Fee', 'direct-stripe' ),
        'hintButtonSetupFee'    =>  __( 'Setup Fee allows you to charge a one time fee on plan subscription activation. Enter the amount use it and charge, 500 means 5.00', 'direct-stripe' ),
        'overDonationSet'       =>  __( 'Options for donations', 'direct-stripe' ),
        'dsButtonZeroDecimal'   =>  __( 'Zero-decimal currencies', 'direct-stripe' ),
        'hintButtonZeroDecimal' =>  __( 'Set to "Yes" to let users input Zero decimal currencies values.', 'direct-stripe' ),
        'extraOptions'          =>  __( 'Extra options', 'direct-stripe' ),
        'dsButtonCapture'       =>  __( 'Capture', 'direct-stripe' ),
        'dsHintButtonCapture'   =>  __( 'Set capture to "No" to manually create the charge from your Stripe admin panel within the next 7 days.', 'direct-stripe' ),
        'dsButtonDisplayAmount' =>  __( 'Display amount', 'direct-stripe' ),
        'dsButDAHint'           =>  __( 'Will display the amount in the modal form\'s button', 'direct-stripe' ),
        'dsButCustomRole'       =>  __( 'Custom Role', 'direct-stripe' ),
        'dsButCustomRoleHint'   =>  __( 'Add a per button custom role to user', 'direct-stripe' ),
        'dsButExtraQueryArgs'   =>  __( 'Extra query arguments','direct-stripe' ),
        'dsButSuccessQArgs'     =>  __( 'Success query arguments', 'direct-stripe' ),
        'dsButSuccessQArgsHint' =>  __( 'Pass arguments after success button action. Format: myarg1:myvalue1,myarg2:myvalue2', 'direct-stripe' ),
        'dsButErrorQArgs'       =>  __( 'Error query arguments', 'direct-stripe' ),
        'dsButErrorQArgsHint'   =>  __( 'Pass arguments after error button action. Format: myarg1:myvalue1,myarg2:myvalue2', 'direct-stripe' ),
        'dsButRedirections'     =>  __( 'Per button success/error redirections', 'direct-stripe' ),
        'dsButRedirectionsDesc' =>  __( 'Enter the entire http address "http://domain.ext/success-or-error-page" ; this will override redirections globally set.', 'direct-stripe' ),
        'dsButSuccessRed'       =>  __( 'Success url', 'direct-stripe' ),
        'dsButErrorRed'         =>  __( 'Error url', 'direct-stripe' ),
        'dsInvalidEmail'        =>  __( 'Invalid e-mail.', 'direct-stripe' ),
        'dsPaymentType'         =>  __( 'Payment', 'direct-stripe' ),
        'dsSubscriptionType'    =>  __( 'Subscription', 'direct-stripe' ),
        'dsDonationType'        =>  __( 'Donation', 'direct-stripe' ),
    ),
    'dsCorePath'    => DSCORE_PATH,
    'dsCoreUrl'     => DSCORE_URL,
    'api'   => array(
        'settings'      =>  esc_url_raw( rest_url( 'direct-stripe/v1/settings' ) ),
        'buttons'       =>  esc_url_raw( rest_url( 'direct-stripe/v1/buttons' ) ),
        'nonce'         =>  wp_create_nonce( 'ds_rest' ),
        'pages'         =>  esc_url_raw( rest_url( 'wp/v2/pages' ) ),
    )
);