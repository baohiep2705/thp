Hustle.define("Optin.Subscription_List_Modal", function($){
    "use strict";

    var view_email_list_cache = {};

    return  Backbone.View.extend({
        id: "wpoi-emails-list-modal",
        template: Optin.template("wpoi-emails-list-modal-tpl"),
        list_template: Optin.template("wpoi-emails-list-tpl"),
        show_delay: 350,
        events: {
            "click .inc-opt-close-emails-list": "close",
            "click .wpoi-complete-mask": "close"
        },
        initialize: function(){

            return this.render();
        },
        render: function(){
            var self = this,
                html = this.template( this.model);

            html = html.replace("__id", this.model.id); // add the id to the export csv link
            this.$el.html( html );

            if( !view_email_list_cache[this.model.id] ){
                view_email_list_cache[this.model.id] = $.ajax({
                    url: ajaxurl,
                    type: "GET",
                    data: {
                        action: "inc_optin_get_email_lists",
                        id: this.model.id,
                        _ajax_nonce: $("#wpoi_get_emails_list_nonce").val()
                    }
                });
                this.delay_show = 0;
            }

            view_email_list_cache[this.model.id].then(function(res){
                if( res.success ){
                    var content = self.list_template( { subscriptions: res.data.subscriptions  });

                    self.$("#wpoi-emails-list-content").html( content );
                    self.show();
                }

            });

            this.$el.appendTo( "body" );
            return this;
        },
        show: function(){
            _.delay( function(){
                this.$el.addClass("show");
            }.bind(this), this.show_delay);
        },
        close: function(e){
            e.preventDefault();
            this.$el.removeClass("show");
            _.delay( function(){
                this.remove();
            }.bind(this), 350);
        }
    });

});