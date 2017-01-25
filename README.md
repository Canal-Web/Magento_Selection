# Magento_Selection
Récupère une sélection de produits selon un attribut

Exemple d'intégration du bloc (sur une page CMS en back-office, ou dans un layout XML) - le bloc affichera 4 produits ayant l'attribut (booléen) is_top_promo à "oui", ordonné par "position" :

```xml
<block type="selection/list" name="selection" template="selection/selection-home.phtml">
    <action method="setData">
        <name>attribute</name><value>is_top_promo</value>
    </action>
    <action method="setData">
        <name>limit</name><value>4</value>
    </action>
    <action method="setData">
        <name>orderAttribute</name><value>position</value>
    </action>
</block>
```

NB: l'orderAttribute est facultatif (le tri se fera sur l'attribut weight si non spécifié)

---

### TODO :
* Prévoir migration pour ajouter la création automatique des attributs de sélection et critère de tri ? Comme ça ce serait toujours les mêmes... Mais quid de l'ajout à l'attribute set ?
* Traduire ce readme
* Pas de solution plus propre pour la query?
