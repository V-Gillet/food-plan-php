<?php

class User
{
    private string $pseudo;
    private int $mass;
    private string $gender = 'male';
    private int $age;
    private int $height;
    private float $activityRate;
    private int $maintainKcal;

    public function __construct(string $pseudo, string $gender, int $age, int $mass, int $height)
    {
        $this->pseudo = $pseudo;
        $this->gender = $gender;
        $this->age = $age;
        $this->mass = $mass;
        $this->height = $height;
    }

    public function calculateMaintainKcal(int $mass, int $height, int $age, float $activityRate)
    {
        if ($this->gender === 'male') {
            intval($this->maintainKcal = ((10 * $mass) + (6.25 * $height) - (5 * $age) + 5) * $activityRate);
            return $this;
        } elseif ($this->gender === 'female') {
            intval($this->maintainKcal = ((10 * $mass) + (6.25 * $height) - (5 * $age) - 161) * $activityRate);
            return $this;
        } else {
            return 'I don\'t have the solution yet :(';
        }
    }
}

/*
Pour la femme : (10 × Poids en kg) + (6,25 x Taille en cm) - (5 × âge en années) - 161

Pour l’homme : (10 x Poids en kg) + (6,25 x Taille en cm) - (5 x âge en années) + 5
Métabolisme de base x1,2 = Sédentaire, pas d’activité physique

Métabolisme de base x 1,375 = Activité de faible intensité 1 à 3 fois par semaine

Métabolisme de base x1,55 = Personne active / Exercices d’intensité modérée 3 à 5 fois par semaine / Marche 2 à 5 km par jour / Fait entre 9400 pas et 23 500 pas.

Métabolisme de base x1,725 = Personne très active / Exercices de forte intensité 6 fois par semaine / Marche plus de 5 km par jour / Fait plus de 23 500 pas.

Métabolisme de base x1,9 = Activité physique intense tous les jours, au travail ou en entraînement / S’entraîne 2 fois par jour.*/