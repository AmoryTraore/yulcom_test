<?php

class Standard_action_main_ecf2cfd98f29bf627bd5ab450b18e865e7c77999 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['route'] = NULL;
$arguments1['parameters'] = array (
);
$arguments1['referenceType'] = 'absolute';
$arguments1['route'] = 'web_ts';
// Rendering Array
$array3 = [];
$array3['id'] = $renderingContext->getVariableProvider()->getByPath('pageId');
$array3['template'] = 'all';
$arguments1['parameters'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" method="post" enctype="multipart/form-data" id="TypoScriptTemplateModuleController" name="editForm" class="form">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
$arguments4 = [];
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'args';
// Rendering Array
$array6 = [];
$array6['0'] = 'web';
$array6['1'] = $renderingContext->getVariableProvider()->getByPath('pageId');
$arguments4['value'] = $array6;
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action action="TYPO3.Backend.Storage.ModuleStateStorage.update" args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};
$arguments10 = [];
$arguments10['value'] = NULL;
$arguments10['forceObject'] = false;
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};
$arguments7 = [];
$arguments7['value'] = NULL;
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output0 .= '"></typo3-immediate-action>
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$arguments12 = [];
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'moduleTitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('typoscriptTemplateModuleContent');
};
$arguments14 = [];
$arguments14['value'] = NULL;

$output0 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output0 .= '
</form>
';

return $output0;
}


}
#