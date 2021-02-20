/**
 * @file
 * mollo_location behaviors.
 */

(function($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Behavior molloModule.
   */
  Drupal.behaviors.molloModule = {
    attach(context, settings) {
      console.log('Mollo Location');

      const $triggerElem = $('.mollo-location-test-1-trigger');
      const $resultElem = $('.mollo-location-test-1-result');
      let counter = 0;

      $('#mollo-location', context)
        .once('mollo-location')
        .each(() => {
          $triggerElem.click(event => {
            console.log('click!');
            event.preventDefault();
            counter++;
            $resultElem.html(counter);
          });
        });
    },
  };
})(jQuery, Drupal, drupalSettings);
