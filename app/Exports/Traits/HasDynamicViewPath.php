<?php

namespace App\Exports\Traits;

trait HasDynamicViewPath
{
    protected function getViewPath($debitur, $fileName)
    {
        if ($debitur->simulation && $debitur->simulation->jenis_kredit) {
            $folder = strtolower(str_replace(' ', '_', $debitur->simulation->jenis_kredit));
            $viewPath = "debiturs.{$folder}.{$fileName}";
            
            // Check if view exists, fallback to default
            if (view()->exists($viewPath)) {
                return $viewPath;
            }
        }
        
        // Fallback to default view
        return "debiturs.{$fileName}";
    }
}
