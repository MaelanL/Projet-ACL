import * as React from 'react';
import Card from "../models/Card";

/**
 * Propriétés de la page d'accueil.
 */
export interface HomeProperties
{

}

/**
 * Etats de la page d'accueil.
 */
export interface HomeState
{
	// test.
  cards : Card[];
}

/**
 * Classe de l'accueil de l'application.
 */
export class Home extends React.Component<HomeProperties,HomeState>
{

  constructor(props: HomeProperties) {
    super(props);

    this.state =
    {
      cards: null,
    };

  }



  componentDidMount(): void
	{
		// test
    fetch('/api/cards/jeu')
        .then(response => {
					return response.json();
        })
        .then((cards : Array<Card>)=> {
					this.setState({cards: cards})
            console.log(cards);
        });
  }

  render() {
    return (
      <div>
        <h1>App</h1>
      </div>
    );
  }
}

export default Home;
