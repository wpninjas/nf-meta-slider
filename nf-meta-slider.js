jQuery( document ).ready( function() {
    var nfMetaSliderController = Marionette.Object.extend( {

        initialize: function() {
            this.listenTo( Backbone.Radio.channel( 'form' ), 'render:view', this.metaSlider );
            this.listenTo( Backbone.Radio.channel( 'nfMP' ), 'change:part', this.metaSlider );
        },

        metaSlider: function() {
            var inlineScripts = jQuery( '.nf-form-cont .metaslider script' );
            _.each( inlineScripts, function( inlineScript ){
                eval( inlineScript.innerHTML );
            });
        }

    });

    new nfMetaSliderController();
});