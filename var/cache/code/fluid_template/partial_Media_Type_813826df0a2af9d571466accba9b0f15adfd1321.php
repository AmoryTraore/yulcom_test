<?php

class partial_Media_Type_813826df0a2af9d571466accba9b0f15adfd1321 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'isImage';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};
$arguments3 = [];
$arguments1['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
$arguments5 = [];
$arguments5['value'] = NULL;
$arguments5['name'] = NULL;
$arguments5['name'] = 'isAudio';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};
$arguments7 = [];
$arguments5['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};
$arguments9 = [];
$arguments9['value'] = NULL;
$arguments9['name'] = NULL;
$arguments9['name'] = 'isMedia';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};
$arguments11 = [];
$arguments9['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
$arguments31 = [];
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['partial'] = 'Media/Type/Image';
// Rendering Array
$array33 = [];
$array33['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array33['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array33['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array33['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments31['arguments'] = $array33;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
    ';
return $output30;
};
$arguments28 = [];
$arguments28['value'] = NULL;
$arguments28['value'] = $renderingContext->getVariableProvider()->getByPath('isImage');

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};
$arguments37 = [];
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['debug'] = true;
$arguments37['partial'] = 'Media/Type/Audio';
// Rendering Array
$array39 = [];
$array39['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array39['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array39['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
    ';
return $output36;
};
$arguments34 = [];
$arguments34['value'] = NULL;
$arguments34['value'] = $renderingContext->getVariableProvider()->getByPath('isAudio');

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};
$arguments43 = [];
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['debug'] = true;
$arguments43['partial'] = 'Media/Type/Video';
// Rendering Array
$array45 = [];
$array45['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array45['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array45['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments43['arguments'] = $array45;

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
    ';
return $output42;
};
$arguments40 = [];
$arguments40['value'] = NULL;
$arguments40['value'] = $renderingContext->getVariableProvider()->getByPath('isMedia');

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
};
$arguments46 = [];

$output27 .= '';

$output27 .= '
';
return $output27;
};
$arguments13 = [];
$arguments13['expression'] = NULL;
$arguments13['expression'] = 1;

$output0 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isImage');
}): return call_user_func(function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Media/Type/Image';
// Rendering Array
$array18 = [];
$array18['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array18['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array18['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array18['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments16['arguments'] = $array18;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
    ';
return $output15;
});
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isAudio');
}): return call_user_func(function() use ($renderingContext) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
$arguments20 = [];
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Media/Type/Audio';
// Rendering Array
$array22 = [];
$array22['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array22['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments20['arguments'] = $array22;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
    ';
return $output19;
});
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isMedia');
}): return call_user_func(function() use ($renderingContext) {
$output23 = '';

$output23 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
$arguments24 = [];
$arguments24['section'] = NULL;
$arguments24['partial'] = NULL;
$arguments24['delegate'] = NULL;
$arguments24['renderable'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['optional'] = false;
$arguments24['default'] = NULL;
$arguments24['contentAs'] = NULL;
$arguments24['debug'] = true;
$arguments24['partial'] = 'Media/Type/Video';
// Rendering Array
$array26 = [];
$array26['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array26['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array26['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments24['arguments'] = $array26;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
    ';
return $output23;
});
default: return call_user_func(function() use ($renderingContext) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
});
}
}, array($arguments13));

$output0 .= '

';

return $output0;
}


}
#