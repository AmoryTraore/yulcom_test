<?php

class partial_Media_Gallery_42195ecddca9412eb4b86f710e8f4b2a3bf13de9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string8 = '{data.imagecols as integer}';
$array9 = array (
  0 => '{data.imagecols as integer}',
  1 => '{data.imagecols as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string8, $array9);
};
$arguments6 = [];
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'imagecols';
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.gallery.columns.{imagecols}');
};
$arguments10 = [];
$arguments10['value'] = NULL;
$arguments10['name'] = NULL;
$arguments10['name'] = 'columnConfig';
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output5 .= '
    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$arguments12 = [];
$arguments12['as'] = NULL;
$arguments12['variants'] = NULL;
$arguments12['multiplier'] = NULL;
$arguments12['gutters'] = NULL;
$arguments12['corrections'] = NULL;
$arguments12['aspectRatio'] = NULL;
$arguments12['as'] = 'variants';
$arguments12['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments12['multiplier'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier');
$arguments12['gutters'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters');
$arguments12['corrections'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections');

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output5 .= '

    <div class="gallery-row">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <div class="gallery-item ';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnConfig.class')]);

$output16 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
$arguments17 = [];
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['debug'] = true;
$arguments17['partial'] = 'Media/Type';
// Rendering Array
$array19 = [];
$array19['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array19['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array19['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array19['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments17['arguments'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
            </div>
        ';
return $output16;
};
$arguments14 = [];
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('files');
$arguments14['as'] = 'file';
$arguments14['iteration'] = 'fileIteration';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output5 .= '
    </div>

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
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('files');

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

return $output0;
}


}
#