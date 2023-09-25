import * as React from 'react';
import Card from "../models/Card";
import "../../css/Home.css"
import "../../css/app.css"

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
      cards: [],
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

	protected test(): void
	{
		fetch( 'api/test/'+this.state.cards[0].id+"/"+this.state.cards[1].id, {
			method:'post',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			},
			body: JSON.stringify(this.state.cards.splice(0,2))
		})
			.then(response => {
				return response.json();
			})
			.then( data => {
				console.log(data);
			})
	}

  render() {
    return (
      <div>
        <h1>App</h1>
				<i className="ri-admin-line"></i>



				<button onClick={() => {this.test()}}>
					<i className="ri-admin-fill"></i>
					test
				</button>
      </div>
    );
  }
}

export default Home;
