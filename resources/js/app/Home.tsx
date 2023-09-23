import React from "react";

export interface HomeProperties
{

}


export interface HomeState
{
  test: string;
}


export class Home extends React.Component<HomeProperties,HomeState>
{

  constructor(props: HomeProperties) {
    super(props);

    this.state =
    {
      test: "Ford",
    };

  }



  componentDidMount() {
    fetch('/api/products')
        .then(response => {
            return response.json();
        })
        .then(products => {
            console.log(products);
            //Fetched product is stored in the stat
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
