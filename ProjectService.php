<?php

class Project
{
    public string $name;

    public bool $isInternal;
}

class ProjectService
{
    /**
     * @param array<string> $types
     */
    public function create(string $name, array $types): Project
    {
        $project = new Project();
        $project->name = $name;
        $project->isInternal = (bool) array_search('internal', $types);

        return $project;
    }
}