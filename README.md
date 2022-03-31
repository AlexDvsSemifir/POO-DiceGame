# Dice Game

## Diagramm

```plantuml
@startuml

skinparam classAttributeIconSize 0

class De {
  +valeur
  +lancer()
}

De "0..*" --o "1" Gobelet

class Gobelet {
  +valeur
  lancer()
  afficherScore()
}

class Joueur {
  +nom
  +score
  jouer(Gobelet)
  afficherScore()
}

Joueur "0..*"  --o "1" Partie
Partie "1" o-- "1" Gobelet

class Partie {
  nbTours: int
  initialiserPartie()
  lancerPartie()
  afficherGagnant()
}

@enduml
```
