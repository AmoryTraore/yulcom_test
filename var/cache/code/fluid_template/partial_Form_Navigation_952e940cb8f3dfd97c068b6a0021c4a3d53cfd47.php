<?php

class partial_Form_Navigation_952e940cb8f3dfd97c068b6a0021c4a3d53cfd47 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
<nav class="form-navigation">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
                <span class="btn-group previous">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
$arguments6 = [];
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['respectSubmittedDataValue'] = true;
$arguments6['property'] = '__currentPage';
$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage.index');
// Rendering Boolean node
// Rendering Array
$array8 = [];
$array8['0'] = 'false';

$expression9 = function($context) {return FALSE;};
$arguments6['respectSubmittedDataValue'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
$arguments13 = [];
$arguments13['element'] = NULL;
$arguments13['property'] = NULL;
$arguments13['renderingOptionProperty'] = NULL;
$arguments13['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage');
$arguments13['renderingOptionProperty'] = 'previousButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);
};
$arguments10 = [];
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['form'] = NULL;
$arguments10['formaction'] = NULL;
$arguments10['formenctype'] = NULL;
$arguments10['formmethod'] = NULL;
$arguments10['formnovalidate'] = NULL;
$arguments10['formtarget'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['type'] = 'submit';
$arguments10['type'] = 'button';
$output12 = '';

$output12 .= 'document.forms[\'';

$output12 .= $renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier');

$output12 .= '\'].submit();';
$arguments10['onclick'] = $output12;
$arguments10['class'] = 'btn btn-cancel';
$arguments10['formnovalidate'] = 'formnovalidate';

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output5 .= '
                </span>
            ';
return $output5;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage');

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};
$arguments38 = [];
$arguments38['element'] = NULL;
$arguments38['property'] = NULL;
$arguments38['renderingOptionProperty'] = NULL;
$arguments38['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage');
$arguments38['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);
};
$arguments36 = [];
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['aria'] = NULL;
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['property'] = NULL;
$arguments36['autofocus'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['form'] = NULL;
$arguments36['formaction'] = NULL;
$arguments36['formenctype'] = NULL;
$arguments36['formmethod'] = NULL;
$arguments36['formnovalidate'] = NULL;
$arguments36['formtarget'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['type'] = 'submit';
$arguments36['property'] = '__currentPage';
$arguments36['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index');
$arguments36['class'] = 'btn btn-primary';

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                    </span>
                ';
return $output35;
};
$arguments33 = [];

$output32 .= '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};
$arguments48 = [];
$arguments48['element'] = NULL;
$arguments48['property'] = NULL;
$arguments48['renderingOptionProperty'] = NULL;
$arguments48['element'] = $renderingContext->getVariableProvider()->getByPath('form');
$arguments48['renderingOptionProperty'] = 'submitButtonLabel';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                        ';
return $output47;
};
$arguments43 = [];
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['aria'] = NULL;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['autofocus'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['form'] = NULL;
$arguments43['formaction'] = NULL;
$arguments43['formenctype'] = NULL;
$arguments43['formmethod'] = NULL;
$arguments43['formnovalidate'] = NULL;
$arguments43['formtarget'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['type'] = 'submit';
$arguments43['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('form.pages');
};
$arguments45 = [];
$arguments45['subject'] = NULL;
$renderChildrenClosure46 = ($arguments45['subject'] !== null) ? function() use ($arguments45) { return $arguments45['subject']; } : $renderChildrenClosure46;$arguments43['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);
$arguments43['class'] = 'btn btn-primary';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                    </span>
                ';
return $output42;
};
$arguments40 = [];
$arguments40['if'] = NULL;

$output32 .= '';

$output32 .= '
            ';
return $output32;
};
$arguments15 = [];
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = [];
$array30['0'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage');

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
$arguments20 = [];
$arguments20['element'] = NULL;
$arguments20['property'] = NULL;
$arguments20['renderingOptionProperty'] = NULL;
$arguments20['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage');
$arguments20['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);
};
$arguments18 = [];
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['aria'] = NULL;
$arguments18['name'] = NULL;
$arguments18['value'] = NULL;
$arguments18['property'] = NULL;
$arguments18['autofocus'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['form'] = NULL;
$arguments18['formaction'] = NULL;
$arguments18['formenctype'] = NULL;
$arguments18['formmethod'] = NULL;
$arguments18['formnovalidate'] = NULL;
$arguments18['formtarget'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['type'] = 'submit';
$arguments18['property'] = '__currentPage';
$arguments18['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index');
$arguments18['class'] = 'btn btn-primary';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                    </span>
                ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};
$arguments28 = [];
$arguments28['element'] = NULL;
$arguments28['property'] = NULL;
$arguments28['renderingOptionProperty'] = NULL;
$arguments28['element'] = $renderingContext->getVariableProvider()->getByPath('form');
$arguments28['renderingOptionProperty'] = 'submitButtonLabel';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '
                        ';
return $output27;
};
$arguments23 = [];
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['aria'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['autofocus'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['form'] = NULL;
$arguments23['formaction'] = NULL;
$arguments23['formenctype'] = NULL;
$arguments23['formmethod'] = NULL;
$arguments23['formnovalidate'] = NULL;
$arguments23['formtarget'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['type'] = 'submit';
$arguments23['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('form.pages');
};
$arguments25 = [];
$arguments25['subject'] = NULL;
$renderChildrenClosure26 = ($arguments25['subject'] !== null) ? function() use ($arguments25) { return $arguments25['subject']; } : $renderChildrenClosure26;$arguments23['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$arguments23['class'] = 'btn btn-primary';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                    </span>
                ';
return $output22;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
        </div>
    </div>
</nav>

';

return $output0;
}


}
#