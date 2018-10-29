<?php 
namespace Custom\CustomAttribute\Plugin\Customer;

class AdressEditPlugin
{
    private $layout;

    public function __construct(
        LayoutInterface $layout
    ) {
        $this->layout = $layout;
    }

    public function afterGetNameBlockHtml(
        \Magento\Customer\Block\Adress\Edit $edit,
        $result
    ) {
        return $result 
        . $this->layout->createBlock(
            'Custom\CustomAttribute\Block\Customer\Address\Form\Edit\Custom'
        );

        /*. 
        '<div class="field field-name-lastname required">
            <label class="label" for="lastname">
                <span>Custom Attribute</span>
            </label>
            <div class="control">
                <input type="text" id="lastname" name="lastname" value="" title="Custom Attribute" class="input-text required-entry" data-validate="{required:true}">
            </div>
        </div>';*/
    }
}
?>