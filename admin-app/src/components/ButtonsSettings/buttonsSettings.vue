<template>
    <div>

        <v-layout row  wrap mb-3>
            <v-flex xs12 mb-3>
                <h2>{{ text.buttonsSettings }}</h2>

                <label for="new-button-name">{{ text.createButtonsTitle}}</label>
            </v-flex>

            <v-flex md2 xs12 pt-2>
                <v-text-field id="new-button-name" v-model="newButton" ></v-text-field>
            </v-flex>
            <v-flex>
                <v-btn type="submit" color="success" class="option" v-on:click="pushButton( newButton, null, null, null )">{{ text.createButtons }}</v-btn>
            </v-flex>

        </v-layout>

        <hr />

        <v-layout row wrap>
            <v-flex md2 xs12>

                <h2>{{ text.editButtonTitle }}</h2>
                <label for="buttonSelection">{{text.selectButton}}</label>
                <v-combobox
                        class="ds-select-button"
                        v-model="selectedButton"
                        :items="buttons"
                        id="buttonSelection"
                        autocomplete="on"
                        solo
                ></v-combobox>
            </v-flex>

            <v-flex md4 xs12 text-xs-center>

                <h3 v-if="selectedButton != null && selectedButton.name != null ">{{ text.currentlySelected }} : {{ selectedButton.text }}</h3>
                <h3 v-else>{{ text.currentlySelectedNo }}</h3>

            </v-flex>

            <v-flex v-if="selectedButton != null && selectedButton.name != null" md4 xs12 text-xs-center>
                <v-btn
                        color="warning"
                        dark
                        @click.stop="dialog = true"
                        class="option"
                >
                    {{ text.deleteButton }}
                </v-btn>

                <v-dialog
                        v-model="dialog"
                        max-width="290"
                >
                    <v-card>
                        <v-card-title class="headline">{{ text.titDeleteButton }}</v-card-title>
                        <v-card-text>
                            {{ text.defDeleteButton }}
                        </v-card-text>
                        <v-card-text>
                            {{ text.queDeleteButton }}
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                    color="info"
                                    flat="flat"
                                    @click="dialog = false"
                            >
                                {{ text.no }}
                            </v-btn>

                            <v-btn
                                    color="error"
                                    flat="flat"
                                    @click="deleteButton( selectedButton )"
                            >
                                {{ text.yes }}
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>




            </v-flex>

        </v-layout>

        <div v-if="selectedButton != null && selectedButton.name != null">

            <v-layout row wrap>

                <v-flex md3 pa-3 xs12>
                    <label for="dsButtonName">{{ text.buttonName }}</label>
                    <v-text-field
                            id="dsButtonName"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'name' , $event)"
                            :name="selectedButton.name"
                            :value="selectedButton.name"
                            v-model="selectedButton.name"
                    ></v-text-field>
                </v-flex>
                <v-flex md4 xs12 text-xs-center>
                    <p id="buttonIDValue">{{ text.valueIDLabel }} : {{selectedButton.value }}</p>
                </v-flex>

            </v-layout>

            <v-layout row wrap>
                <v-flex md8 xs12>

                    <h3>{{ text.buttonMainOptions }}</h3>

                </v-flex>
            </v-layout>
            <v-layout>
                <v-flex>
                    <p>{{ text.buttonMainDescription }}</p>
                </v-flex>
            </v-layout>

            <v-layout row wrap>

                <v-flex md4 pa-3 xs12>
                    <label for="buttonType">{{ text.typeLabel }}</label>
                    <p v-if="selectedButton.type === 'update'">{{ text.UpdateCardNotice}}</p>
                    <v-select
                            id="buttonType"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'type' , $event)"
                            :items="buttonTypes"
                            v-model="selectedButton.type"
                    ></v-select>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label v-if="selectedButton.type === null" for="buttonAmount">{{ text.typeLabel }}</label>
                    <label v-if="selectedButton.type === 'payment'" for="buttonAmount">{{ text.valueAmountLabel }}</label>
                    <label v-if="selectedButton.type === 'subscription'" for="buttonAmount">{{ text.valueSubscriptionLabel }}</label>
                    <label v-if="selectedButton.type === 'donation'" for="buttonAmount">{{ text.valueDonationLabel }}</label>
                    <label v-if="selectedButton.type === 'update'" for="buttonAmount">{{ text.valueUpdateLabel }}</label>
                    <v-text-field
                            id="buttonAmount"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'amount' , $event)"
                            :name="selectedButton.amount"
                            :value="selectedButton.amount"
                            v-model="selectedButton.amount"
                            :hint="text.valueAmountHint"
                            :disabled="selectedButton.type === 'donation'"
                    ></v-text-field>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="buttonCSSID">{{ text.valueCSSIDLabel }}</label>
                    <v-text-field
                            id="buttonCSSID"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'button_id' , $event)"
                            :name="selectedButton.button_id"
                            :value="selectedButton.button_id"
                            v-model="selectedButton.button_id"
                            :hint="text.valueCSSIDHint"
                    ></v-text-field>
                </v-flex>
            </v-layout>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.overrideGeneralOptions }}</h3>
            </v-layout>
            <v-layout>
                <p>{{ text.buttonSettingsOverride }}</p>
            </v-layout>

            <v-layout row wrap>

                <v-flex md4 pa-3 xs12>
                    <label for="buttonLabel">{{ text.buttonLabel }}</label>
                    <v-text-field
                            id="buttonLabel"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'label' , $event)"
                            :name="selectedButton.label"
                            :value="selectedButton.label"
                            v-model="selectedButton.label"
                    ></v-text-field>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="buttonPanelLabel">{{ text.buttonPanelLabel }}</label>
                    <v-text-field
                            id="buttonPanelLabel"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'panellabel' , $event)"
                            :name="selectedButton.panellabel"
                            :value="selectedButton.panellabel"
                            v-model="selectedButton.panellabel"
                    ></v-text-field>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButtonDescription">{{ text.buttonDescription }}</label>
                    <v-textarea
                            id="dsButtonDescription"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'description' , $event)"
                            :name="selectedButton.description"
                            :value="selectedButton.description"
                            v-model="selectedButton.description"
                            solo
                    ></v-textarea>
                </v-flex>

            </v-layout>

            <v-layout row wrap>

                <v-flex md2 pa-3 xs12>
                    <v-select
                            id="dsButtonCurrency"
                            v-on:change="pushButton( selectedButton.text, selectedButton, 'currency' , $event)"
                            v-bind:items="currencies"
                            v-bind:label="text.buttonCurrency"
                            v-model="selectedButton.currency"
                            class="input-group--focused"
                            single-line
                            :hint="text.hintButtonCurrency"
                    ></v-select>
                </v-flex>
                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonTC"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'tc' , $event)"
                                    v-bind:label="text.tc"
                                    v-model="selectedButton.tc"
                                    single-line
                            ></v-switch>
                        </span>
                        <span class="pb-3">{{ text.hintButtonTC }}</span>
                    </v-tooltip>
                </v-flex>
                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonBilling"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'billing' , $event)"
                                    v-bind:label="text.billing"
                                    v-model="selectedButton.billing"
                                    single-line
                            ></v-switch>
                        </span>
                        <span class="pb-3">{{ text.hintButtonBilling }}</span>
                    </v-tooltip>
                </v-flex>
                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonShipping"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'shipping' , $event)"
                                    v-bind:label="text.shipping"
                                    v-model="selectedButton.shipping"
                                    single-line
                            ></v-switch>
                        </span>
                        <span>{{ text.hintButtonShipping }}</span>
                    </v-tooltip>
                </v-flex>
                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonRM"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'rememberme' , $event)"
                                    v-bind:label="text.rm"
                                    v-model="selectedButton.rememberme"
                                    single-line
                            ></v-switch>
                        </span>
                        <span>{{ text.hintButtonRm}}</span>
                    </v-tooltip>
                </v-flex>

            </v-layout>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.overSubscriptionSet }}</h3>
            </v-layout>

            <v-layout row wrap>
                <v-flex md4 pa-3 xs12>
                    <label for="buttonCoupon">{{ text.buttonCoupon }}</label>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-text-field
                                    id="buttonCoupon"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'coupon' , $event)"
                                    :name="selectedButton.coupon"
                                    :value="selectedButton.coupon"
                                    v-model="selectedButton.coupon"
                            ></v-text-field>
                        </span>
                        <span>{{ text.hintButtonCoupon}}</span>
                    </v-tooltip>
                </v-flex>
                <v-flex md4 pa-3 xs12>
                    <label for="buttonSetupFee">{{ text.SetupFee }}</label>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-text-field
                                    id="buttonSetupFee"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'setup_fee' , $event)"
                                    :name="selectedButton.setup_fee"
                                    :value="selectedButton.setup_fee"
                                    v-model="selectedButton.setup_fee"
                            ></v-text-field>
                        </span>
                        <span>{{ text.hintButtonSetupFee }}</span>
                    </v-tooltip>
                </v-flex>
            </v-layout>

            <div id="dsFullSubscriptions"></div>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.overDonationSet }}</h3>
            </v-layout>

            <v-layout>
                <v-flex pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonZD"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'zero_decimal' , $event)"
                                    v-bind:label="text.dsButtonZeroDecimal"
                                    v-model="selectedButton.zero_decimal"
                                    single-line
                            ></v-switch>
                        </span>
                        <span>{{ text.hintButtonZeroDecimal }}</span>
                    </v-tooltip>
                </v-flex>
            </v-layout>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.extraOptions }}</h3>
            </v-layout>

            <v-layout row wrap>

                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonCapture"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'capture' , $event)"
                                    v-bind:label="text.dsButtonCapture"
                                    v-model="selectedButton.capture"
                                    single-line
                            ></v-switch>
                        </span>
                        <span>{{ text.dsHintButtonCapture }}</span>
                    </v-tooltip>
                </v-flex>

                <v-flex md2 pa-3 xs12>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-switch
                                    id="dsButtonDisplayAmount"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'display_amount' , $event)"
                                    v-bind:label="text.dsButtonDisplayAmount"
                                    v-model="selectedButton.display_amount"
                                    single-line
                            ></v-switch>
                        </span>
                        <span>{{ text.dsButDAHint}}</span>
                    </v-tooltip>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButCustomRole">{{ text.dsButCustomRole }}</label>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-text-field
                                    id="dsButCustomRole"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'custom_role' , $event)"
                                    :name="selectedButton.custom_role"
                                    :value="selectedButton.custom_role"
                                    v-model="selectedButton.custom_role"
                            ></v-text-field>
                        </span>
                        <span>{{ text.dsButCustomRoleHint }}</span>
                    </v-tooltip>
                </v-flex>

            </v-layout>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.dsButExtraQueryArgs }}</h3>
            </v-layout>

            <v-layout row wrap>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButSuccessQArgs">{{ text.dsButSuccessQArgs }}</label>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-text-field
                                    id="dsButSuccessQArgs"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'success_query' , $event)"
                                    :name="selectedButton.success_query"
                                    :value="selectedButton.success_query"
                                    v-model="selectedButton.success_query"
                            ></v-text-field>
                        </span>
                        <span>{{ text.dsButSuccessQArgsHint }}</span>
                    </v-tooltip>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButErrorQArgs">{{ text.dsButErrorQArgs }}</label>
                    <v-tooltip left>
                        <span slot="activator">
                            <v-text-field
                                    id="dsButErrorQArgs"
                                    v-on:change="pushButton( selectedButton.text, selectedButton, 'error_query' , $event)"
                                    :name="selectedButton.error_query"
                                    :value="selectedButton.error_query"
                                    v-model="selectedButton.error_query"
                            ></v-text-field>
                        </span>
                        <span>{{ text.dsButErrorQArgsHint }}</span>
                    </v-tooltip>
                </v-flex>

            </v-layout>

            <hr/>

            <v-layout row wrap>
                <h3>{{ text.dsButRedirections }}</h3>
            </v-layout>
            <v-layout row wrap>
                <p>{{ text.dsButRedirectionsDesc }}</p>
            </v-layout>

            <v-layout row wrap>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButSuccessRed">{{ text.dsButSuccessRed }}</label>
                        <v-text-field
                                id="dsButSuccessRed"
                                v-on:change="pushButton( selectedButton.text, selectedButton, 'success_url' , $event)"
                                :name="selectedButton.success_url"
                                :value="selectedButton.success_url"
                                v-model="selectedButton.success_url"
                        ></v-text-field>
                </v-flex>

                <v-flex md4 pa-3 xs12>
                    <label for="dsButErrorRed">{{ text.dsButErrorRed }}</label>
                        <v-text-field
                                id="dsButErrorRed"
                                v-on:change="pushButton( selectedButton.text, selectedButton, 'error_url' , $event)"
                                :name="selectedButton.error_url"
                                :value="selectedButton.error_url"
                                v-model="selectedButton.error_url"
                        ></v-text-field>
                </v-flex>
            </v-layout>

        </div>

    </div>
</template>

<script>
  import axios from 'axios';

  const API_BUTTONS = ds_admin_app_vars.api.buttons;
  const strings = ds_admin_app_vars.strings;
  const nonce = ds_admin_app_vars.api.nonce;

  export default {
    name: 'buttonSettings',
    data() {
      return {
        dialog: false,
        text: strings,
        buttons: [],
        selectedButton: null,
        newButton: '',
        buttonTypes: [
          {
            'text': strings.dsPaymentType,
            'value': 'payment'
          },
          {
            'text': strings.dsSubscriptionType,
            'value': 'subscription'
          },
          {
            'text': strings.dsDonationType,
            'value': 'donation'
          },
          {
            'text': strings.dsUpdateType,
            'value': 'update'
          }
        ],
        rules: {
          required: (value) => !!value || strings.requiredField,
          email: (value) => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || text.dsInvalidEmail
          }
        },
        currencies: [
          'USD', 'EUR', 'GBP','AUD', 'CAD', 'JPY', 'DKK', 'NOK', 'SEK', 'SGD', 'HKD', 'CHF', 'MXN', 'BRL', 'NZD'
        ]
      }
    },
    mounted () {
      axios
        .get(API_BUTTONS)
        .then(response => {
            let allButtons = this.buttons;
            jQuery.each( response.data, function( key, value ) {
              if( value !== null ) {
                allButtons.push( value );
              }
            });
            if( allButtons.length !== 0 ) {
              this.buttons = allButtons;
            }
          }
        )
    },
    methods: {
      pushButton ( newButton, button, setting, event ) {
        jQuery('#load-result').addClass('active');
        if( ! newButton ){
          console.log('Empty name!!');
          jQuery('#load-result').removeClass('active');
          return;
        }

        if( typeof button === "undefined" || button === null ) { //Create Button

          function uniqueNumber() {
            let date = Date.now();
            if (date <= uniqueNumber.previous) {
              date = ++uniqueNumber.previous;
            } else {
              uniqueNumber.previous = date;
            }
            return date;
          }
          uniqueNumber.previous = 0;
          function ID(){
            return uniqueNumber();
          }

          let buttonID = "ds-" + ID();

          const defaultData = {
            text: newButton,
            value: buttonID,
            type: "payment",
            amount: 1000,
            button_id: "MyButton",
            name: "Company Name",
            description: "Description",
            label: "Payment",
            panellabel: "Confirm payment",
            coupon: "",
            setup_fee: "",
            zero_decimal: false,
            capture: true,
            billing: false,
            shipping: false,
            tc: false,
            rememberme: false,
            display_amount: false,
            currency: "USD",
            custom_role: "",
            success_query: "",
            error_query: "",
            success_url: "",
            error_url: ""
          };
          this.buttons.push( defaultData );

          const button = this.buttons.find( function(element) {
            return element.value === buttonID;
          });
          const but = JSON.stringify(button);

          const req_url = API_BUTTONS + '?id=' + buttonID + '&data=' + but + '&_dsnonce=' + nonce;

          let el = jQuery('#save-result');
          function bubble(){
            el[0].classList.add('active')
            setTimeout(() => {
              el[0].classList.remove('active')
            }, 3000)
          }

          axios
            .post(req_url)
            .then( response => {
                if (typeof response.data === "undefined" || response.data === null) {
                  this.newButton = '';
                  jQuery('#load-result').removeClass('active');
                  bubble()
                } else {
                  if (response.data.error === true) {
                    console.log(response.data.text);
                    jQuery('#load-result').removeClass('active');
                  }
                }
              }
            )
            .catch ( error => {
                console.log(error);
                    if (typeof error.data.message === "undefined" || error.data.message === null) {
                        console.log(error.message);
                      jQuery('#load-result').removeClass('active');
                    }
                }
            )


        } else { //Edit Button

          if( typeof setting === 'undefined' || setting === null ) {
            return;
          }

          button[setting] = event;
          this.buttons.push( button );

          const but = JSON.stringify(button);
          const req_url = API_BUTTONS + '?id=' + button.value + '&data=' + but + '&_dsnonce=' + nonce;

          let el = jQuery('#save-result');
          function bubble(){
            el[0].classList.add('active')
            setTimeout(() => {
              el[0].classList.remove('active')
            }, 3000)
          }

          axios
            .post(req_url)
            .then(response => {
                if (typeof response.data === "undefined" || response.data === null) {
                  jQuery('#load-result').removeClass('active');
                  bubble()
                } else {
                  if (response.data.error === true) {
                    console.log(response.data.text);
                    jQuery('#load-result').removeClass('active');
                  }
                }
              }
            )
            .catch(error => {
                console.log(error)
                  if (typeof error.message === "undefined" || error.message === null) {
                    console.log(error.data.message);
                    jQuery('#load-result').removeClass('active');
                  }
                }
            )

        }

      },
      deleteButton: function( button ) {

        jQuery('#load-result').addClass('active');

        let el = jQuery('#save-result');
        function bubble(){
          el[0].classList.add('active')
          setTimeout(() => {
            el[0].classList.remove('active')
          }, 3000)
        }

        const req_url = API_BUTTONS + '?id=' + button.value + '&delete=yes&_dsnonce=' + nonce;
        axios
          .post(req_url)
          .then(response => {
              if (typeof response.data === "undefined" || response.data === null) {
                jQuery('#load-result').removeClass('active');
                bubble();
              } else {
                if (response.data.error === true) {
                  console.log(response.data.text);
                  jQuery('#load-result').removeClass('active');
                }
              }
            }
          )
          .catch(error => {
            console.log(error);
            jQuery('#load-result').removeClass('active');
          })


        //Interface actions
        this.selectedButton = null;
        this.dialog = false;
        this.buttons.find( function(element, index, arr) {
          if( element.value === button.value ) {
            arr.splice( index, 1 );
          }
        });

      }
    }
  }
</script>

<style lang="scss" scoped>

</style>